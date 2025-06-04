<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\SecurityRequestAttributes;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use App\Repository\UtilisateurRepository;

class SecurityControllerAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';

    public function __construct(
        private UrlGeneratorInterface $urlGenerator,
        private UtilisateurRepository $userRepository // Inject UserRepository
    ) {
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email'); // Utilisez `request->get` pour récupérer les données du formulaire
        $password = $request->request->get('password'); // Récupérez le mot de passe

        $request->getSession()->set(SecurityRequestAttributes::LAST_USERNAME, $email);

        return new Passport(
            new UserBadge($email, function ($userIdentifier) {
                $user = $this->userRepository->findOneBy(['email' => $userIdentifier]);

                // Vérifiez si l'utilisateur existe et si son compte est actif
                if (!$user || !$user->getIsActive()) {
                    throw new CustomUserMessageAuthenticationException('Votre compte est suspendu, pour plus d\'informations veuillez contacter le support.');
                }

                return $user;
            }),
            new PasswordCredentials($password), // Utilisez le mot de passe récupéré
            [
                new CsrfTokenBadge('authenticate', $request->request->get('_csrf_token')), // Vérifiez le token CSRF
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        return new RedirectResponse($this->urlGenerator->generate('app_home'));
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
