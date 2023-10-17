<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Description = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $Dateheure = null;

    #[ORM\Column(length: 255)]
    private ?string $Circuit = null;

    #[ORM\Column(length: 255)]
    private ?string $Organisateur = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Participants = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Statut = null;

    #[ORM\Column(length: 255)]
    private ?string $TypeCourse = null;

    #[ORM\Column(length: 255)]
    private ?string $Duree = null;

    #[ORM\Column]
    private ?int $LimiteParticipant = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getDateheure(): ?\DateTimeInterface
    {
        return $this->Dateheure;
    }

    public function setDateheure(\DateTimeInterface $Dateheure): static
    {
        $this->Dateheure = $Dateheure;

        return $this;
    }

    public function getCircuit(): ?string
    {
        return $this->Circuit;
    }

    public function setCircuit(string $Circuit): static
    {
        $this->Circuit = $Circuit;

        return $this;
    }

    public function getOrganisateur(): ?string
    {
        return $this->Organisateur;
    }

    public function setOrganisateur(string $Organisateur): static
    {
        $this->Organisateur = $Organisateur;

        return $this;
    }

    public function getParticipants(): ?string
    {
        return $this->Participants;
    }

    public function setParticipants(?string $Participants): static
    {
        $this->Participants = $Participants;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->Statut;
    }

    public function setStatut(?string $Statut): static
    {
        $this->Statut = $Statut;

        return $this;
    }

    public function getTypeCourse(): ?string
    {
        return $this->TypeCourse;
    }

    public function setTypeCourse(string $TypeCourse): static
    {
        $this->TypeCourse = $TypeCourse;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->Duree;
    }

    public function setDuree(string $Duree): static
    {
        $this->Duree = $Duree;

        return $this;
    }

    public function getLimiteParticipant(): ?int
    {
        return $this->LimiteParticipant;
    }

    public function setLimiteParticipant(int $LimiteParticipant): static
    {
        $this->LimiteParticipant = $LimiteParticipant;

        return $this;
    }
}
