<?php

namespace App\Entity;

use App\Repository\CovoiturageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CovoiturageRepository::class)]
class Covoiturage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
<<<<<<< HEAD
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateur $chauffeur = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
=======
    #[ORM\JoinColumn]
    private ?Utilisateur $chauffeur = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn]
>>>>>>> back_end
    private ?Vehicule $vehicule = null;

    #[ORM\Column(length: 255)]
    private ?string $adresseDepart = null;

    #[ORM\Column(length: 255)]
    private ?string $adresseArrivee = null;

    #[ORM\Column(type: 'datetime', nullable: false)]
    private ?\DateTimeInterface $dateDepart = null;

    #[ORM\Column(type: 'datetime', nullable: false)]
    private ?\DateTimeInterface $dateArrivee = null;

    #[ORM\Column(length: 255)]
    private ?string $heureDepart = null;

    #[ORM\Column(length: 255)]
    private ?string $heureArrivee = null;

    #[ORM\Column(type: 'boolean', nullable: false)]
    private ?bool $isEcologique = null;

    #[ORM\Column]
    private ?int $placesRestantes = null;

    #[ORM\Column]
    private ?int $prix = null;

<<<<<<< HEAD
<<<<<<< HEAD
    #[ORM\OneToMany(mappedBy: 'covoiturage', targetEntity: Avis::class)]
    private Collection $avis;

=======
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $preference = null;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private ?bool $preferenceAcceptee = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private ?array $preferences = [];

=======
>>>>>>> frontend
    #[ORM\OneToMany(mappedBy: 'covoiturage', targetEntity: Avis::class)]
    private Collection $avis;

    #[ORM\ManyToMany(targetEntity: Utilisateur::class)]
    private Collection $passagers;

    #[ORM\ManyToMany(targetEntity: Preference::class)]
    private Collection $preferences;


>>>>>>> back_end
    public function __construct()
    {
        $this->avis = new ArrayCollection();
        $this->passagers = new ArrayCollection();
        $this->preferences = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChauffeur(): ?Utilisateur
    {
        return $this->chauffeur;
    }

    public function setChauffeur(?Utilisateur $chauffeur): static
    {
        $this->chauffeur = $chauffeur;

        return $this;
    }

    public function getVehicule(): ?Vehicule
    {
        return $this->vehicule;
    }

    public function setVehicule(?Vehicule $vehicule): static
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    public function getAdresseDepart(): ?string
    {
        return $this->adresseDepart;
    }

    public function setAdresseDepart(string $adresseDepart): static
    {
        $this->adresseDepart = $adresseDepart;

        return $this;
    }

    public function getAdresseArrivee(): ?string
    {
        return $this->adresseArrivee;
    }

    public function setAdresseArrivee(string $adresseArrivee): static
    {
        $this->adresseArrivee = $adresseArrivee;

        return $this;
    }

    public function getDateDepart(): ?\DateTimeInterface
    {
        return $this->dateDepart;
    }

    public function setDateDepart(\DateTimeInterface $dateDepart): self
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    public function getDateArrivee(): ?\DateTimeInterface
    {
        return $this->dateArrivee;
    }

    public function setDateArrivee(\DateTimeInterface $dateArrivee): self
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }

    public function getHeureDepart(): ?string
    {
        return $this->heureDepart;
    }

    public function setHeureDepart(string $heureDepart): self
    {
        $this->heureDepart = $heureDepart;

        return $this;
    }

    public function getHeureArrivee(): ?string
    {
        return $this->heureArrivee;
    }

    public function setHeureArrivee(string $heureArrivee): self
    {
        $this->heureArrivee = $heureArrivee;

        return $this;
    }

    public function getIsEcologique(): ?bool
    {
        return $this->isEcologique;
    }

    public function setIsEcologique(bool $isEcologique): self
    {
        $this->isEcologique = $isEcologique;

        return $this;
    }

    public function getPlacesRestantes(): ?int
    {
        return $this->placesRestantes;
    }

    public function setPlacesRestantes(int $placesRestantes): static
    {
        $this->placesRestantes = $placesRestantes;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function getPreferences(): ?array
    {
        return $this->preferences;
    }

    public function setPreferences(?array $preferences): static
    {
        $this->preferences = $preferences;

        return $this;
    }

>>>>>>> back_end
=======
>>>>>>> frontend
    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvis(Avis $avis): self
    {
        if (!$this->avis->contains($avis)) {
            $this->avis->add($avis);
            $avis->setCovoiturage($this);
        }

        return $this;
    }

    public function removeAvis(Avis $avis): self
    {
        if ($this->avis->removeElement($avis)) {
            if ($avis->getCovoiturage() === $this) {
                $avis->setCovoiturage(null);
            }
        }

        return $this;
    }
<<<<<<< HEAD
=======

<<<<<<< HEAD
>>>>>>> back_end
=======
    public function getPassagers(): Collection
    {
        return $this->passagers;
    }

    public function addPassager(Utilisateur $passager): self
    {
        if (!$this->passagers->contains($passager)) {
            $this->passagers->add($passager);
        }

        return $this;
    }

    public function removePassager(Utilisateur $passager): self
    {
        if ($this->passagers->contains($passager)) {
        $this->passagers->removeElement($passager);
        }

        return $this;
    }

    public function getPreferences(): Collection
    {
        return $this->preferences;
    }

    public function addPreference(Preference $preference): self
    {
        if (!$this->preferences->contains($preference)) {
            $this->preferences[] = $preference;
        }

        return $this;
    }

    public function removePreference(Preference $preference): self
    {
        $this->preferences->removeElement($preference);

        return $this;
    }
>>>>>>> frontend
}
