<?php

namespace App\Entity;

use App\Repository\CovoiturageRepository;
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
    #[ORM\JoinColumn(nullable: false)]
    private ?utilisateur $chauffeur = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?vehicule $vehicule = null;

    #[ORM\Column(length: 255)]
    private ?string $adresseDepart = null;

    #[ORM\Column(length: 255)]
    private ?string $adresseArrivee = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateDepart = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateArrivee = null;

    #[ORM\Column(length: 255)]
    private ?string $heureDepart = null;

    #[ORM\Column(length: 255)]
    private ?string $heureArrivee = null;

    #[ORM\Column]
    private ?bool $isEcologique = null;

    #[ORM\Column]
    private ?int $placesRestantes = null;

    #[ORM\Column]
    private ?int $prix = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChauffeur(): ?utilisateur
    {
        return $this->chauffeur;
    }

    public function setChauffeur(?utilisateur $chauffeur): static
    {
        $this->chauffeur = $chauffeur;

        return $this;
    }

    public function getVehicule(): ?vehicule
    {
        return $this->vehicule;
    }

    public function setVehicule(?vehicule $vehicule): static
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

    public function getDateDepart(): ?\DateTime
    {
        return $this->dateDepart;
    }

    public function setDateDepart(\DateTime $dateDepart): static
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    public function getDateArrivee(): ?\DateTime
    {
        return $this->dateArrivee;
    }

    public function setDateArrivee(\DateTime $dateArrivee): static
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }

    public function getHeureDepart(): ?string
    {
        return $this->heureDepart;
    }

    public function setHeureDepart(string $heureDepart): static
    {
        $this->heureDepart = $heureDepart;

        return $this;
    }

    public function getHeureArrivee(): ?string
    {
        return $this->heureArrivee;
    }

    public function setHeureArrivee(string $heureArrivee): static
    {
        $this->heureArrivee = $heureArrivee;

        return $this;
    }

    public function isEcologique(): ?bool
    {
        return $this->isEcologique;
    }

    public function setIsEcologique(bool $isEcologique): static
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
}
