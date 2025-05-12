<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $note = null;

    #[ORM\Column(length: 255)]
    private ?string $commentaires = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date = null;

    #[ORM\ManyToOne(inversedBy: 'avis')]
    #[ORM\JoinColumn(nullable: false)]
    private ?utilisateur $auteur = null;

    #[ORM\ManyToOne(inversedBy: 'avis')]
    private ?utilisateur $destinataire = null;

    #[ORM\ManyToOne]
    private ?covoiturage $covoiturage = null;

    #[ORM\Column]
    private ?bool $isValide = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): static
    {
        $this->note = $note;

        return $this;
    }

    public function getCommentaires(): ?string
    {
        return $this->commentaires;
    }

    public function setCommentaires(string $commentaires): static
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getAuteur(): ?utilisateur
    {
        return $this->auteur;
    }

    public function setAuteur(?utilisateur $auteur): static
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getDestinataire(): ?utilisateur
    {
        return $this->destinataire;
    }

    public function setDestinataire(?utilisateur $destinataire): static
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    public function getCovoiturage(): ?covoiturage
    {
        return $this->covoiturage;
    }

    public function setCovoiturage(?covoiturage $covoiturage): static
    {
        $this->covoiturage = $covoiturage;

        return $this;
    }

    public function isValide(): ?bool
    {
        return $this->isValide;
    }

    public function setIsValide(bool $isValide): static
    {
        $this->isValide = $isValide;

        return $this;
    }
}
