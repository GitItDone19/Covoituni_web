<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Subject cannot be empty")]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: "Subject must be at least {{ limit }} characters long",
        maxMessage: "Subject cannot be longer than {{ limit }} characters"
    )]
    private ?string $subject = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "Description cannot be empty")]
    #[Assert\Length(
        min: 10,
        minMessage: "Description must be at least {{ limit }} characters long"
    )]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'reclamations')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: false)]
    #[Assert\NotNull(message: "User must be specified")]
    private ?Utilisateur $user = null;

    #[ORM\Column(length: 20, options: ["default" => "pending"])]
    #[Assert\NotBlank]
    #[Assert\Choice(
        choices: ['pending', 'in_progress', 'resolved', 'rejected'],
        message: "Choose a valid status: pending, in_progress, resolved, or rejected"
    )]
    private ?string $status = "pending";

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Assert\Length(
        max: 1000,
        maxMessage: "Reply cannot be longer than {{ limit }} characters"
    )]
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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
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

    public function getState(): ?string
    {
        return $this->status;
    }

    public function setState(string $state): self
    {
        $this->status = $state;
        return $this;
    }
}