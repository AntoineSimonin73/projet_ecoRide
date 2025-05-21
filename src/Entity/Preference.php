<?php

namespace App\Entity;

use App\Repository\PreferenceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PreferenceRepository::class)]
class Preference
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

<<<<<<< HEAD
    #[ORM\ManyToOne(inversedBy: 'preferences')]
    private ?Utilisateur $utilisateur = null; // Correction ici

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column]
    private ?bool $accepte = null;
=======
    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToOne(inversedBy: 'preferences')]
    private ?utilisateur $utilisateur = null;
>>>>>>> frontend

    public function getId(): ?int
    {
        return $this->id;
    }

<<<<<<< HEAD
    public function getUtilisateur(): ?Utilisateur // Correction ici
=======
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getUtilisateur(): ?utilisateur
>>>>>>> frontend
    {
        return $this->utilisateur;
    }

<<<<<<< HEAD
    public function setUtilisateur(?Utilisateur $utilisateur): static // Correction ici
=======
    public function setUtilisateur(?utilisateur $utilisateur): static
>>>>>>> frontend
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }
<<<<<<< HEAD

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function isAccepte(): ?bool
    {
        return $this->accepte;
    }

    public function setAccepte(bool $accepte): static
    {
        $this->accepte = $accepte;

        return $this;
    }
=======
>>>>>>> frontend
}
