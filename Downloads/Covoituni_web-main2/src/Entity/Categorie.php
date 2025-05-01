<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(options: ["default" => false])]
    private ?bool $ac = false;

    #[ORM\Column(options: ["default" => false])]
    private ?bool $aux = false;

    #[ORM\Column(options: ["default" => false])]
    private ?bool $bluetooth = false;

    #[ORM\Column(options: ["default" => false])]
    private ?bool $black_windows = false;

    #[ORM\Column(options: ["default" => false])]
    private ?bool $gps = false;

    #[ORM\Column(options: ["default" => false])]
    private ?bool $heated_seats = false;

    #[ORM\Column(options: ["default" => false])]
    private ?bool $parking_sensors = false;

    #[ORM\Column(options: ["default" => false])]
    private ?bool $rear_camera = false;

    #[ORM\Column(options: ["default" => false])]
    private ?bool $sunroof = false;

    #[ORM\Column(options: ["default" => false])]
    private ?bool $usb_port = false;

    #[ORM\Column(options: ["default" => false])]
    private ?bool $leather_seats = false;

    #[ORM\Column(options: ["default" => false])]
    private ?bool $cruise_control = false;

    #[ORM\Column(options: ["default" => false])]
    private ?bool $lane_assist = false;

    #[ORM\Column(options: ["default" => false])]
    private ?bool $automatic_transmission = false;

    #[ORM\Column(options: ["default" => false])]
    private ?bool $manual_transmission = false;

    #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: Car::class)]
    private Collection $cars;

    public function __construct()
    {
        $this->cars = new ArrayCollection();
        
        // Initialize all boolean fields to false
        $this->ac = false;
        $this->aux = false;
        $this->bluetooth = false;
        $this->black_windows = false;
        $this->gps = false;
        $this->heated_seats = false;
        $this->parking_sensors = false;
        $this->rear_camera = false;
        $this->sunroof = false;
        $this->usb_port = false;
        $this->leather_seats = false;
        $this->cruise_control = false;
        $this->lane_assist = false;
        $this->automatic_transmission = false;
        $this->manual_transmission = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    // Getters and setters for all the new boolean fields
    public function isAc(): bool
    {
        return $this->ac;
    }

    public function setAc(bool $ac): self
    {
        $this->ac = $ac;
        return $this;
    }

    public function isAux(): bool
    {
        return $this->aux;
    }

    public function setAux(bool $aux): self
    {
        $this->aux = $aux;
        return $this;
    }

    public function isBluetooth(): bool
    {
        return $this->bluetooth;
    }

    public function setBluetooth(bool $bluetooth): self
    {
        $this->bluetooth = $bluetooth;
        return $this;
    }

    public function isBlackWindows(): bool
    {
        return $this->black_windows;
    }

    public function setBlackWindows(bool $black_windows): self
    {
        $this->black_windows = $black_windows;
        return $this;
    }

    public function isGps(): bool
    {
        return $this->gps;
    }

    public function setGps(bool $gps): self
    {
        $this->gps = $gps;
        return $this;
    }

    public function isHeatedSeats(): bool
    {
        return $this->heated_seats;
    }

    public function setHeatedSeats(bool $heated_seats): self
    {
        $this->heated_seats = $heated_seats;
        return $this;
    }

    public function isParkingSensors(): bool
    {
        return $this->parking_sensors;
    }

    public function setParkingSensors(bool $parking_sensors): self
    {
        $this->parking_sensors = $parking_sensors;
        return $this;
    }

    public function isRearCamera(): bool
    {
        return $this->rear_camera;
    }

    public function setRearCamera(bool $rear_camera): self
    {
        $this->rear_camera = $rear_camera;
        return $this;
    }

    public function isSunroof(): bool
    {
        return $this->sunroof;
    }

    public function setSunroof(bool $sunroof): self
    {
        $this->sunroof = $sunroof;
        return $this;
    }

    public function isUsbPort(): bool
    {
        return $this->usb_port;
    }

    public function setUsbPort(bool $usb_port): self
    {
        $this->usb_port = $usb_port;
        return $this;
    }

    public function isLeatherSeats(): bool
    {
        return $this->leather_seats;
    }

    public function setLeatherSeats(bool $leather_seats): self
    {
        $this->leather_seats = $leather_seats;
        return $this;
    }

    public function isCruiseControl(): bool
    {
        return $this->cruise_control;
    }

    public function setCruiseControl(bool $cruise_control): self
    {
        $this->cruise_control = $cruise_control;
        return $this;
    }

    public function isLaneAssist(): bool
    {
        return $this->lane_assist;
    }

    public function setLaneAssist(bool $lane_assist): self
    {
        $this->lane_assist = $lane_assist;
        return $this;
    }

    public function isAutomaticTransmission(): bool
    {
        return $this->automatic_transmission;
    }

    public function setAutomaticTransmission(bool $automatic_transmission): self
    {
        $this->automatic_transmission = $automatic_transmission;
        return $this;
    }

    public function isManualTransmission(): bool
    {
        return $this->manual_transmission;
    }

    public function setManualTransmission(bool $manual_transmission): self
    {
        $this->manual_transmission = $manual_transmission;
        return $this;
    }

    /**
     * @return Collection<int, Car>
     */
    public function getCars(): Collection
    {
        return $this->cars;
    }

    public function addCar(Car $car): self
    {
        if (!$this->cars->contains($car)) {
            $this->cars->add($car);
            $car->setCategorie($this);
        }
        return $this;
    }

    public function removeCar(Car $car): self
    {
        if ($this->cars->removeElement($car)) {
            if ($car->getCategorie() === $this) {
                $car->setCategorie(null);
            }
        }
        return $this;
    }

    /**
     * Get all features as an array
     */
    public function getFeatures(): array
    {
        return [
            'ac' => $this->ac,
            'aux' => $this->aux,
            'bluetooth' => $this->bluetooth,
            'black_windows' => $this->black_windows,
            'gps' => $this->gps,
            'heated_seats' => $this->heated_seats,
            'parking_sensors' => $this->parking_sensors,
            'rear_camera' => $this->rear_camera,
            'sunroof' => $this->sunroof,
            'usb_port' => $this->usb_port,
            'leather_seats' => $this->leather_seats,
            'cruise_control' => $this->cruise_control,
            'lane_assist' => $this->lane_assist,
            'automatic_transmission' => $this->automatic_transmission,
            'manual_transmission' => $this->manual_transmission,
        ];
    }

    /**
     * Calculate similarity score with another set of features
     */
    public function calculateSimilarity(array $features): int
    {
        $score = 0;
        $categoryFeatures = $this->getFeatures();
        
        foreach ($features as $feature => $value) {
            if (isset($categoryFeatures[$feature]) && $categoryFeatures[$feature] === $value) {
                $score++;
            }
        }
        
        return $score;
    }
}