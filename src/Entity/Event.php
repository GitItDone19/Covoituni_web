<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventRepository::class)]
#[ORM\Table(name: 'event')]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_event')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(name: 'date_event', type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateEvent = null;

    #[ORM\Column(name: 'heure_event', type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $heureEvent = null;

    #[ORM\Column(length: 255)]
    private ?string $lieu = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\ManyToOne(targetEntity: TypeEvent::class, inversedBy: 'events')]
    #[ORM\JoinColumn(name: 'id_type', referencedColumnName: 'id_type', nullable: false)]
    private ?TypeEvent $type = null;

    #[ORM\Column(length: 20, options: ['default' => 'ACTIVE'])]
    private ?string $status = 'ACTIVE';

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: EventParticipation::class, orphanRemoval: true)]
    private Collection $participations;

    public function __construct()
    {
        $this->participations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDateEvent(): ?\DateTimeInterface
    {
        return $this->dateEvent;
    }

    public function setDateEvent(\DateTimeInterface $dateEvent): static
    {
        $this->dateEvent = $dateEvent;

        return $this;
    }

    public function getHeureEvent(): ?\DateTimeInterface
    {
        return $this->heureEvent;
    }

    public function setHeureEvent(\DateTimeInterface $heureEvent): static
    {
        $this->heureEvent = $heureEvent;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): static
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getType(): ?TypeEvent
    {
        return $this->type;
    }

    public function setType(?TypeEvent $type): static
    {
        $this->type = $type;

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

    /**
     * @return Collection<int, EventParticipation>
     */
    public function getParticipations(): Collection
    {
        return $this->participations;
    }

    public function addParticipation(EventParticipation $participation): static
    {
        if (!$this->participations->contains($participation)) {
            $this->participations->add($participation);
            $participation->setEvent($this);
        }

        return $this;
    }

    public function removeParticipation(EventParticipation $participation): static
    {
        if ($this->participations->removeElement($participation)) {
            // set the owning side to null (unless already changed)
            if ($participation->getEvent() === $this) {
                $participation->setEvent(null);
            }
        }

        return $this;
    }
}