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
use App\Form\ChangePasswordFormType;
use Symfony\Component\Validator\Validator\ValidatorInterface;

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
    public function register(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager, ValidatorInterface $validator): Response
    {
        $error = null; // Initialise la variable error

        if ($request->isMethod('POST')) {
            $pseudo = $request->request->get('pseudo');
            $email = $request->request->get('email');
            $password = $request->request->get('password');

            // Création de l'utilisateur
            $user = new Utilisateur();
            $user->setPseudo($pseudo);
            $user->setEmail($email);
            $user->setPassword($password);

            // Validation de l'utilisateur
            $errors = $validator->validate($user);

            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
                return $this->redirectToRoute('app_register');
            }

            // Hashage du mot de passe
            $user->setPassword($passwordHasher->hashPassword($user, $password));

            // Assignation du rôle par défaut
            $roleRepository = $entityManager->getRepository(Role::class);
            $defaultRole = $roleRepository->findOneBy(['name' => 'ROLE_UTILISATEUR']); // Remplacez 'ROLE_USER' par le rôle par défaut

            if (!$defaultRole) {
                throw new \Exception('Le rôle par défaut n\'existe pas.');
            }

            $user->setRole($defaultRole);

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Votre compte a été créé avec succès. Vous pouvez maintenant vous connecter.');

            return $this->redirectToRoute('app_login');
        }

        return $this->render('security/register.html.twig', [
            'error' => $error, // Passe la variable error au template
        ]);
    }

    #[Route('/changer-mot-de-passe', name: 'app_change_password')]
    public function changePassword(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }

        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $currentPassword = $form->get('currentPassword')->getData();
            $newPassword = $form->get('plainPassword')->getData();
            $confirmPassword = $form->get('confirmPassword')->getData();

            // Vérifier que le mot de passe actuel est correct
            if (!$passwordHasher->isPasswordValid($user, $currentPassword)) {
                $this->addFlash('error', 'Le mot de passe actuel est incorrect.');
                return $this->redirectToRoute('app_change_password');
            }

            // Vérifier que les nouveaux mots de passe correspondent
            if ($newPassword !== $confirmPassword) {
                $this->addFlash('error', 'Les nouveaux mots de passe ne correspondent pas.');
                return $this->redirectToRoute('app_change_password');
            }

            // Mettre à jour le mot de passe
            $user->setPassword($passwordHasher->hashPassword($user, $newPassword));
            $entityManager->flush();

            $this->addFlash('success', 'Votre mot de passe a été modifié avec succès.');
            return $this->redirectToRoute('app_home');
        }

        return $this->render('user/change_password.html.twig', [
            'changePasswordForm' => $form->createView(),
        ]);
    }
}