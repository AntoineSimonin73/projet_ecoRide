<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Utilisateur;
use App\Entity\Role;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route('/logout-message', name: 'app_logout_message')]
    public function logoutMessage(): Response
    {
        return $this->render('security/logout.html.twig');
    }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager): Response
    {
        $error = null; // Initialise la variable error

        if ($request->isMethod('POST')) {
            $pseudo = $request->request->get('pseudo');
            $email = $request->request->get('email');
            $password = $request->request->get('password');

            // Validation basique
            if (empty($pseudo) || empty($email) || empty($password)) {
                $error = 'Tous les champs sont obligatoires.';
            } else {
                // Création de l'utilisateur
                $user = new Utilisateur();
                $user->setPseudo($pseudo);
                $user->setEmail($email);
                $user->setPassword($passwordHasher->hashPassword($user, $password));
                $user->setCredits(0);

                // Assignation du rôle par défaut
                $roleRepository = $entityManager->getRepository(Role::class);
                $defaultRole = $roleRepository->findOneBy(['name' => 'ROLE_USER']); // Remplacez 'ROLE_USER' par le rôle par défaut

                if (!$defaultRole) {
                    throw new \Exception('Le rôle par défaut n\'existe pas.');
                }

                $user->setRole($defaultRole);

                $entityManager->persist($user);
                $entityManager->flush();

                $this->addFlash('success', 'Votre compte a été créé avec succès. Vous pouvez maintenant vous connecter.');

                return $this->redirectToRoute('app_login');
            }
        }

        return $this->render('security/register.html.twig', [
            'error' => $error, // Passe la variable error au template
        ]);
    }
}
