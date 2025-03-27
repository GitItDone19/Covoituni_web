<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $subject = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'reclamations')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: false)]
    private ?Utilisateur $user = null;

<<<<<<< HEAD
    #[ORM\Column(length: 20, options: ["default" => "pending"])]
    #[Assert\NotBlank]
    #[Assert\Choice(
        choices: ['pending', 'in_progress', 'resolved', 'rejected'],
        message: "Choose a valid status: pending, in_progress, resolved, or rejected"
    )]
    // Note: All methods (getStatus/setStatus and getState/setState) use this property
    private ?string $status = "pending";
=======
    #[ORM\Column(length: 50, options: ['default' => 'pending'])]
    private ?string $state = 'pending';
>>>>>>> origin/Gestion_Event_Hassen

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $reply = null;

    public function __construct()
    {
        // Initialiser la date avec la date actuelle lors de la création
        $this->date = new \DateTime();
        $this->status = 'pending';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): static
    {
        $this->subject = $subject;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getUser(): ?Utilisateur
    {
        return $this->user;
    }

    public function setUser(?Utilisateur $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): static
    {
        $this->state = $state;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): static
    {
        // Vérifier si la date est valide avant de l'assigner
        if ($date instanceof \DateTimeInterface) {
            $this->date = $date;
        } else {
            // Utiliser la date actuelle si la date fournie est invalide
            $this->date = new \DateTime();
        }

        return $this;
    }

    public function getReply(): ?string
    {
        return $this->reply;
    }

    public function setReply(?string $reply): static
    {
        $this->reply = $reply;

        return $this;
    }
}