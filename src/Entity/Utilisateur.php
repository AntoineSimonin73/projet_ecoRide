<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[UniqueEntity(fields: ['pseudo'], message: 'Ce pseudo est déjà utilisé.')]
#[UniqueEntity(fields: ['email'], message: 'Cet email est déjà utilisé.')]
class Utilisateur implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 3, max: 50, minMessage: "Le pseudo doit contenir au moins {{ limit }} caractères.", maxMessage: "Le pseudo ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $pseudo = null;

    #[ORM\Column(length: 255, unique: true)]
    #[Assert\NotBlank]
    #[Assert\Email(message: "Veuillez entrer un email valide.")]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le mot de passe est obligatoire.")]
    #[Assert\Length(
        min: 8,
        minMessage: "Le mot de passe doit contenir au moins {{ limit }} caractères."
    )]
    #[Assert\Regex(
        pattern: '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
        message: "Le mot de passe doit contenir au moins une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial."
    )]
    private string $password;

    #[ORM\Column (nullable: true)]
    private ?int $credits = 20;

    #[ORM\Column (type: 'float', nullable: true)]
    private ?float $noteMoyenne = 0.0;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $photo = null;

    #[ORM\Column]
    private ?bool $isChauffeur = null;

    #[ORM\Column]
    private ?bool $isPassager = null;

    #[ORM\Column(type: 'boolean')]
    private bool $isActive = true;

    /**
     * @var Collection<int, Vehicule>
     */
    #[ORM\OneToMany(targetEntity: Vehicule::class, mappedBy: 'utilisateur')]
    private Collection $vehicules;

    #[ORM\ManyToOne(targetEntity: Role::class, cascade: ['persist'])]
    #[ORM\JoinColumn(nullable: false)] // Cette contrainte indique que 'role_id' ne peut pas être NULL
    private ?Role $role = null;

    /**
     * @var Collection<int, Avis>
     */
    #[ORM\OneToMany(targetEntity: Avis::class, mappedBy: 'auteur', orphanRemoval: true)]
    private Collection $avis;

    #[ORM\OneToMany(mappedBy: 'destinataire', targetEntity: Avis::class)]
    private Collection $avisReçus;

    /**
     * @var Collection<int, Covoiturage>
     */
    #[ORM\ManyToMany(targetEntity: Covoiturage::class, mappedBy: 'passagers')]
    private Collection $covoiturages;

    /**
     * @var Collection<int, Covoiturage>
     */
    #[ORM\OneToMany(mappedBy: 'chauffeur', targetEntity: Covoiturage::class)]
    private Collection $covoituragesEnTantQueChauffeur;

    /**
     * @var Collection<int, Preference>
     */
    #[ORM\OneToMany(targetEntity: Preference::class, mappedBy: 'utilisateur')]
    private Collection $preferences;

    public function __construct()
    {
        $this->vehicules = new ArrayCollection();
        $this->avis = new ArrayCollection();
        $this->avisReçus = new ArrayCollection();
        $this->covoiturages = new ArrayCollection();
        $this->covoituragesEnTantQueChauffeur = new ArrayCollection();
        $this->isChauffeur = false; // Par défaut, l'utilisateur n'est pas chauffeur
        $this->isPassager = true;  // Par défaut, l'utilisateur est passager
        $this->preferences = new ArrayCollection();
        $this->avisRecus = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): static
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getCredits(): ?int
    {
        return $this->credits;
    }

    public function setCredits(int $credits): static
    {
        $this->credits = $credits;

        return $this;
    }

    public function getNoteMoyenne(): ?float
    {
        return $this->noteMoyenne;
    }

    public function setNoteMoyenne(float $noteMoyenne): self
    {
        $this->noteMoyenne = $noteMoyenne;

        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function isChauffeur(): ?bool
    {
        return $this->isChauffeur;
    }

    public function setIsChauffeur(bool $isChauffeur): static
    {
        $this->isChauffeur = $isChauffeur;

        return $this;
    }

    public function isPassager(): ?bool
    {
        return $this->isPassager;
    }

    public function setIsPassager(bool $isPassager): static
    {
        $this->isPassager = $isPassager;

        return $this;
    }

    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @return Collection<int, Vehicule>
     */
    public function getVehicules(): Collection
    {
        return $this->vehicules;
    }

    public function addVehicule(Vehicule $vehicule): static
    {
        if (!$this->vehicules->contains($vehicule)) {
            $this->vehicules->add($vehicule);
            $vehicule->setUtilisateur($this);
        }

        return $this;
    }

    public function removeVehicule(Vehicule $vehicule): static
    {
        if ($this->vehicules->removeElement($vehicule)) {
            // set the owning side to null (unless already changed)
            if ($vehicule->getUtilisateur() === $this) {
                $vehicule->setUtilisateur(null);
            }
        }

        return $this;
    }

    public function getRole(): ?Role
    {
        return $this->role;
    }

    public function setRole(?Role $role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @return Collection<int, Avis>
     */
    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvis(Avis $avis): static
    {
        if (!$this->avis->contains($avis)) {
            $this->avis->add($avis);
            $avis->setAuteur($this);
        }

        return $this;
    }

    public function removeAvis(Avis $avi): static
    {
        if ($this->avis->removeElement($avi)) {
            // set the owning side to null (unless already changed)
            if ($avi->getAuteur() === $this) {
                $avi->setAuteur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Avis>
     */
    public function getAvisReçus(): Collection
    {
        return $this->avisReçus;
    }

    public function addAvisReçu(Avis $avis): self
    {
        if (!$this->avisReçus->contains($avis)) {
            $this->avisReçus->add($avis);
            $avis->setDestinataire($this);
        }

        return $this;
    }

    public function removeAvisReçu(Avis $avis): self
    {
        if ($this->avisReçus->removeElement($avis)) {
            if ($avis->getDestinataire() === $this) {
                $avis->setDestinataire(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Covoiturage>
     */
    public function getCovoiturages(): Collection
    {
        return $this->covoiturages;
    }

    public function addCovoiturage(Covoiturage $covoiturage): self
    {
        if (!$this->covoiturages->contains($covoiturage)) {
            $this->covoiturages->add($covoiturage);
            $covoiturage->addPassager($this); // Met à jour la relation inverse
        }

        return $this;
    }

    public function removeCovoiturage(Covoiturage $covoiturage): self
    {
        if ($this->covoiturages->removeElement($covoiturage)) {
            $covoiturage->removePassager($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Covoiturage>
     */
    public function getCovoituragesEnTantQueChauffeur(): Collection
    {
        return $this->covoituragesEnTantQueChauffeur;
    }

    public function addCovoiturageEnTantQueChauffeur(Covoiturage $covoiturage): self
    {
        if (!$this->covoituragesEnTantQueChauffeur->contains($covoiturage)) {
            $this->covoituragesEnTantQueChauffeur->add($covoiturage);
            $covoiturage->setChauffeur($this);
        }

        return $this;
    }

    public function removeCovoiturageEnTantQueChauffeur(Covoiturage $covoiturage): self
    {
        if ($this->covoituragesEnTantQueChauffeur->removeElement($covoiturage)) {
            // set the owning side to null (unless already changed)
            if ($covoiturage->getChauffeur() === $this) {
                $covoiturage->setChauffeur(null);
            }
        }

        return $this;
    }

    // Méthodes requises par UserInterface
    public function getRoles(): array
    {
        // Retourne un tableau contenant le rôle principal et le rôle par défaut "ROLE_USER"
        $roles = [$this->role->getName()]; // Récupère le rôle principal
        $roles[] = 'ROLE_USER'; // Ajoute le rôle par défaut
        return array_unique($roles); // Évite les doublons
    }
    
    public function setRoles(array $roles): self
    {
        // Définit le rôle principal à partir du tableau (le premier rôle)
        if (!empty($roles)) {
            $roleName = $roles[0];
            // Récupère ou crée un rôle correspondant
            $role = new Role();
            $role->setName($roleName);
            $this->setRole($role);
        }

        return $this;
    }

    public function getUserIdentifier(): string
    {
        // Utilise l'email comme identifiant unique de l'utilisateur
        return $this->email;
    }

    public function eraseCredentials(): void
    {
        // Si vous stockez des données sensibles temporaires, nettoyez-les ici
    }

    public function incrementCredits(int $amount): self
    {
        $this->credits += $amount;
        return $this;
    }

    public function decrementCredits(int $amount): self
    {
        if ($this->credits >= $amount) {
            $this->credits -= $amount;
        } else {
            throw new \LogicException('Crédits insuffisants.');
        }

        return $this;
    }

    /**
     * @return Collection<int, Preference>
     */
    public function getPreferences(): Collection
    {
        return $this->preferences;
    }

    public function addPreference(Preference $preference): static
    {
        if (!$this->preferences->contains($preference)) {
            $this->preferences->add($preference);
            $preference->setUtilisateur($this);
        }

        return $this;
    }

    public function removePreference(Preference $preference): static
    {
        if ($this->preferences->removeElement($preference)) {
            // set the owning side to null (unless already changed)
            if ($preference->getUtilisateur() === $this) {
                $preference->setUtilisateur(null);
            }
        }

        return $this;
    }

    public function calculerNoteMoyenne(): ?float
    {
        $avisValides = $this->avis->filter(function (Avis $avis) {
            return $avis->isValide();
        });

        if ($avisValides->count() === 0) {
            return null; // Pas de note si aucun avis validé
        }

        $sommeNotes = array_reduce($avisValides->toArray(), function ($carry, Avis $avis) {
            return $carry + $avis->getNote();
        }, 0);

        return round($sommeNotes / $avisValides->count(), 2); // Arrondi à 2 décimales
    }
}