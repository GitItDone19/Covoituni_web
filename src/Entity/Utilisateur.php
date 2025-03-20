<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, unique: true)]
    private ?string $username = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    private ?string $prenom = null;

    #[ORM\Column(length: 20)]
    private ?string $tel = null;

    #[ORM\Column(length: 100, unique: true)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $mdp = null;

    #[ORM\ManyToOne(targetEntity: Role::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Role $role = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $verificationcode = null;

    #[ORM\Column(type: 'decimal', precision: 3, scale: 2, nullable: true)]
    private ?string $rating = '5.00';

    #[ORM\Column(nullable: true)]
    private ?int $tripsCount = 0;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imagePath = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Reclamation::class)]
    private Collection $reclamations;

    #[ORM\OneToMany(mappedBy: 'passager', targetEntity: Avis::class)]
    private Collection $avisPassager;

    #[ORM\OneToMany(mappedBy: 'conducteur', targetEntity: Avis::class)]
    private Collection $avisConducteur;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: EventParticipation::class)]
    private Collection $eventParticipations;

    public function __construct()
    {
        $this->reclamations = new ArrayCollection();
        $this->avisPassager = new ArrayCollection();
        $this->avisConducteur = new ArrayCollection();
        $this->eventParticipations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;
        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): static
    {
        $this->tel = $tel;
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

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): static
    {
        $this->mdp = $mdp;
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

    public function getVerificationcode(): ?string
    {
        return $this->verificationcode;
    }

    public function setVerificationcode(?string $verificationcode): static
    {
        $this->verificationcode = $verificationcode;
        return $this;
    }

    public function getRating(): ?string
    {
        return $this->rating;
    }

    public function setRating(?string $rating): static
    {
        $this->rating = $rating;
        return $this;
    }

    public function getTripsCount(): ?int
    {
        return $this->tripsCount;
    }

    public function setTripsCount(?int $tripsCount): static
    {
        $this->tripsCount = $tripsCount;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setImagePath(?string $imagePath): static
    {
        $this->imagePath = $imagePath;
        return $this;
    }

    /**
     * @return Collection<int, Reclamation>
     */
    public function getReclamations(): Collection
    {
        return $this->reclamations;
    }

    public function addReclamation(Reclamation $reclamation): static
    {
        if (!$this->reclamations->contains($reclamation)) {
            $this->reclamations->add($reclamation);
            $reclamation->setUser($this);
        }
        return $this;
    }

    public function removeReclamation(Reclamation $reclamation): static
    {
        if ($this->reclamations->removeElement($reclamation)) {
            if ($reclamation->getUser() === $this) {
                $reclamation->setUser(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, Avis>
     */
    public function getAvisPassager(): Collection
    {
        return $this->avisPassager;
    }

    public function addAvisPassager(Avis $avis): static
    {
        if (!$this->avisPassager->contains($avis)) {
            $this->avisPassager->add($avis);
            $avis->setPassager($this);
        }
        return $this;
    }

    public function removeAvisPassager(Avis $avis): static
    {
        if ($this->avisPassager->removeElement($avis)) {
            if ($avis->getPassager() === $this) {
                $avis->setPassager(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, Avis>
     */
    public function getAvisConducteur(): Collection
    {
        return $this->avisConducteur;
    }

    public function addAvisConducteur(Avis $avis): static
    {
        if (!$this->avisConducteur->contains($avis)) {
            $this->avisConducteur->add($avis);
            $avis->setConducteur($this);
        }
        return $this;
    }

    public function removeAvisConducteur(Avis $avis): static
    {
        if ($this->avisConducteur->removeElement($avis)) {
            if ($avis->getConducteur() === $this) {
                $avis->setConducteur(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, EventParticipation>
     */
    public function getEventParticipations(): Collection
    {
        return $this->eventParticipations;
    }

    public function addEventParticipation(EventParticipation $eventParticipation): static
    {
        if (!$this->eventParticipations->contains($eventParticipation)) {
            $this->eventParticipations->add($eventParticipation);
            $eventParticipation->setUtilisateur($this);
        }
        return $this;
    }

    public function removeEventParticipation(EventParticipation $eventParticipation): static
    {
        if ($this->eventParticipations->removeElement($eventParticipation)) {
            if ($eventParticipation->getUtilisateur() === $this) {
                $eventParticipation->setUtilisateur(null);
            }
        }
        return $this;
    }
} 