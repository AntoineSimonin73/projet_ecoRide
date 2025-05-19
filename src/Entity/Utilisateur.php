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

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 3, max: 50)]
    private ?string $pseudo = null;

    #[ORM\Column(length: 255, unique: true)]
    #[Assert\NotBlank]
    #[Assert\Email]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    #[Assert\Length(min: 8)]
    private ?string $password = null;

    #[ORM\Column (nullable: true)]
    private ?int $credits = null;

    #[ORM\Column (nullable: true)]
    private ?float $noteMoyenne = 0.0;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $photo = null;

    #[ORM\Column]
    private ?bool $isChauffeur = null;

    #[ORM\Column]
    private ?bool $isPassager = null;

    /**
     * @var Collection<int, Vehicule>
     */
    #[ORM\OneToMany(targetEntity: Vehicule::class, mappedBy: 'utilisateur')]
    private Collection $vehicules;

    #[ORM\ManyToOne(targetEntity: Role::class)]
    #[ORM\JoinColumn(nullable: false)]
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
        $this->isChauffeur = false; // Par défaut, l'utilisateur n'est pas chauffeur
        $this->isPassager = true;  // Par défaut, l'utilisateur est passager
        $this->preferences = new ArrayCollection();
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

    public function setNoteMoyenne(float $noteMoyenne): static
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

    public function setRole(?Role $role): static
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
            $covoiturage->addPassager($this);
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

    // Méthodes requises par UserInterface
    public function getRoles(): array
    {
        // Retourne le rôle sous forme de tableau
        return [$this->role->getName()];
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
}
