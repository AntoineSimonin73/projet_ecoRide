<?php
namespace App\Controller;

use App\Entity\Covoiturage;
use App\Entity\Avis;
use App\Entity\Utilisateur;
use App\Entity\Role;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Repository\RideStatsRepository;
use Doctrine\ODM\MongoDB\DocumentManager;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin_dashboard')]
    public function dashboard(DocumentManager $dm, EntityManagerInterface $entityManager): Response
    {
        $startDate = (new \DateTime())->modify('-7 days')->setTime(0, 0, 0);
        $endDate = (new \DateTime())->setTime(23, 59, 59);

        $repository = $dm->getRepository(\App\Document\RideStats::class);

        // Récupère les statistiques depuis MongoDB
        $stats = $repository->createQueryBuilder()
            ->field('date')->gte($startDate)
            ->field('date')->lte($endDate)
            ->sort('date', 'ASC')
            ->getQuery()
            ->execute()
            ->toArray();

        $covoituragesData = [
            'labels' => array_map(fn($s) => $s->getDate()->format('Y-m-d'), $stats),
            'values' => array_map(fn($s) => $s->getRideCount(), $stats),
        ];

        $creditsData = [
            'labels' => $covoituragesData['labels'],
            'values' => array_map(fn($s) => $s->getCreditsEarned(), $stats),
        ];

        $totalCredits = array_sum($creditsData['values']);
        $covoituragesTotal = array_sum($covoituragesData['values']);

        // Récupération des utilisateurs relationnels
        $roleEmploye = $entityManager->getRepository(Role::class)->findOneBy(['name' => 'ROLE_EMPLOYE']);
        $roleUtilisateur = $entityManager->getRepository(Role::class)->findOneBy(['name' => 'ROLE_UTILISATEUR']);

        $employes = $roleEmploye ? $entityManager->getRepository(Utilisateur::class)->findBy(['role' => $roleEmploye]) : [];
        $utilisateurs = $roleUtilisateur ? $entityManager->getRepository(Utilisateur::class)->findBy(['role' => $roleUtilisateur]) : [];
        $utilisateursTotal = count($utilisateurs);


        return $this->render('admin/dashboard.html.twig', [
            'covoituragesData' => $covoituragesData,
            'creditsData' => $creditsData,
            'totalCredits' => $totalCredits,
            'covoituragesTotal' => $covoituragesTotal,
            'employes' => $employes,
            'utilisateurs' => $utilisateurs,
            'utilisateursTotal' => $utilisateursTotal,
        ]);
    }

    #[Route('/covoiturages', name: 'app_admin_covoiturages')]
    public function manageCovoiturages(EntityManagerInterface $entityManager): Response
    {
        $covoiturages = $entityManager->getRepository(Covoiturage::class)->findAll();

        return $this->render('admin/covoiturages.html.twig', [
            'covoiturages' => $covoiturages,
        ]);
    }

    #[Route('/avis', name: 'app_admin_avis')]
    public function manageAvis(EntityManagerInterface $entityManager): Response
    {
        $avis = $entityManager->getRepository(Avis::class)->findAll();

        return $this->render('admin/avis.html.twig', [
            'avis' => $avis,
        ]);
    }

    #[Route('/employes', name: 'app_admin_employes')]
    public function manageEmployes(EntityManagerInterface $entityManager): Response
    {
        // Récupère l'entité Role correspondant à "ROLE_EMPLOYE"
        $roleEmploye = $entityManager->getRepository(Role::class)->findOneBy(['name' => 'ROLE_EMPLOYE']);

        if (!$roleEmploye) {
            throw $this->createNotFoundException('Le rôle ROLE_EMPLOYE n\'existe pas.');
        }

        // Récupère les utilisateurs ayant ce rôle
        $employes = $entityManager->getRepository(Utilisateur::class)->findBy(['role' => $roleEmploye]);

        return $this->render('admin/employes.html.twig', [
            'employes' => $employes,
        ]);
    }

    #[Route('/employes/nouveau', name: 'app_admin_create_employe')]
    public function createEmploye(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        if ($request->isMethod('POST')) {
            $email = $request->request->get('email');
            $password = $request->request->get('password');
            $pseudo = $request->request->get('pseudo');

            // Vérifie si un utilisateur avec cet email existe déjà
            $existingUser = $entityManager->getRepository(Utilisateur::class)->findOneBy(['email' => $email]);
            if ($existingUser) {
                $this->addFlash('error', 'Un utilisateur avec cet email existe déjà.');
                return $this->redirectToRoute('app_admin_create_employe');
            }

            // Récupère ou crée le rôle ROLE_EMPLOYE
            $roleEmploye = $entityManager->getRepository(Role::class)->findOneBy(['name' => 'ROLE_EMPLOYE']);
            if (!$roleEmploye) {
                $roleEmploye = new Role();
                $roleEmploye->setName('ROLE_EMPLOYE');
                $entityManager->persist($roleEmploye);
            }

            // Création d'un nouvel utilisateur
            $employe = new Utilisateur();
            $employe->setEmail($email);
            $employe->setPseudo($pseudo);
            $employe->setRole($roleEmploye); // Associe le rôle
            $hashedPassword = $passwordHasher->hashPassword($employe, $password);
            $employe->setPassword($hashedPassword);

            $entityManager->persist($employe);
            $entityManager->flush();

            $this->addFlash('success', 'Compte employé créé avec succès.');

            return $this->redirectToRoute('app_admin_employes');
        }

        return $this->render('admin/create_employe.html.twig');
    }

    #[Route('/employes/{id}/supprimer', name: 'app_user_delete', methods: ['POST'])]
    public function deleteEmploye(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $employe = $entityManager->getRepository(Utilisateur::class)->find($id);

        if (!$employe || !in_array('ROLE_EMPLOYE', $employe->getRoles())) {
            $this->addFlash('error', 'Employé introuvable.');
            return $this->redirectToRoute('app_admin_employes');
        }

        if ($this->isCsrfTokenValid('delete_user_' . $employe->getId(), $request->request->get('_token'))) {
            $entityManager->remove($employe);
            $entityManager->flush();

            $this->addFlash('success', 'Employé supprimé avec succès.');
        }

        return $this->redirectToRoute('app_admin_employes');
    }

    #[Route('/utilisateurs/{id}/suspendre', name: 'app_user_suspend', methods: ['POST'])]
    public function suspendUser(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $utilisateur = $entityManager->getRepository(Utilisateur::class)->find($id);

        if (!$utilisateur) {
            $this->addFlash('error', 'Utilisateur introuvable.');
            return $this->redirectToRoute('app_admin_employes');
        }

        if ($this->isCsrfTokenValid('suspend_user_' . $utilisateur->getId(), $request->request->get('_token'))) {
            $utilisateur->setIsActive(false); // Ajoute un champ isActive dans l'entité Utilisateur
            $entityManager->flush();

            $this->addFlash('success', 'Compte suspendu avec succès.');
        }

        return $this->redirectToRoute('app_admin_dashboard');
    }

    #[Route('/utilisateurs', name: 'app_admin_users')]
    public function listUsers(EntityManagerInterface $entityManager): Response
    {
        // Récupère le rôle "ROLE_UTILISATEUR"
        $roleUtilisateur = $entityManager->getRepository(Role::class)->findOneBy(['name' => 'ROLE_UTILISATEUR']);

        if (!$roleUtilisateur) {
            throw $this->createNotFoundException('Le rôle ROLE_UTILISATEUR n\'existe pas.');
        }

        // Récupère uniquement les utilisateurs ayant le rôle "ROLE_UTILISATEUR"
        $utilisateurs = $entityManager->getRepository(Utilisateur::class)->findBy(['role' => $roleUtilisateur]);

        return $this->render('admin/users.html.twig', [
            'utilisateurs' => $utilisateurs,
        ]);
    }

    #[Route('/utilisateurs/{id}/reactiver', name: 'app_user_reactivate', methods: ['POST'])]
    public function reactivateUser(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $utilisateur = $entityManager->getRepository(Utilisateur::class)->find($id);

        if (!$utilisateur) {
            $this->addFlash('error', 'Utilisateur introuvable.');
            return $this->redirectToRoute('app_admin_users');
        }

        if ($this->isCsrfTokenValid('reactivate_user_' . $utilisateur->getId(), $request->request->get('_token'))) {
            $utilisateur->setIsActive(true); // Réactive le compte
            $entityManager->flush();

            $this->addFlash('success', 'Compte réactivé avec succès.');
        }

        // Redirige en fonction du rôle de l'utilisateur
        if (in_array('ROLE_EMPLOYE', $utilisateur->getRoles())) {
            return $this->redirectToRoute('app_admin_employes');
        }

        return $this->redirectToRoute('app_admin_users');
    }
}