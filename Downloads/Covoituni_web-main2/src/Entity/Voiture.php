<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VoitureRepository::class)]
class Voiture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'voiture', targetEntity: Co2Emissions::class, cascade: ['persist', 'remove'])]
    private Collection $co2Emissions;

    public function __construct()
    {
        $this->co2Emissions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Co2Emissions>
     */
    public function getCo2Emissions(): Collection
    {
        return $this->co2Emissions;
    }

    public function addCo2Emission(Co2Emissions $co2Emission): static
    {
        if (!$this->co2Emissions->contains($co2Emission)) {
            $this->co2Emissions->add($co2Emission);
            $co2Emission->setVoiture($this);
        }

        return $this;
    }

    public function removeCo2Emission(Co2Emissions $co2Emission): static
    {
        if ($this->co2Emissions->removeElement($co2Emission)) {
            // set the owning side to null (unless already changed)
            if ($co2Emission->getVoiture() === $this) {
                $co2Emission->setVoiture(null);
            }
        }

        return $this;
    }
} 