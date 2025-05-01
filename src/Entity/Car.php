<?php

namespace App\Entity;

use App\Repository\CarRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarRepository::class)]
class Car
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20, unique: true)]
    private ?string $plaqueImatriculation = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateImatriculation = null;

    #[ORM\Column(length: 50)]
    private ?string $couleur = null;

    #[ORM\Column(length: 50)]
    private ?string $marque = null;

    #[ORM\Column(length: 50)]
    private ?string $modele = null;

    #[ORM\ManyToOne(inversedBy: 'cars')]
    #[ORM\JoinColumn(name: 'categorie_id', referencedColumnName: 'id')]
    private ?Categorie $categorie = null;

    #[ORM\Column]
    private ?int $userId = null;

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

    public function __construct()
    {
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

    public function getPlaqueImatriculation(): ?string
    {
        return $this->plaqueImatriculation;
    }

    public function setPlaqueImatriculation(string $plaqueImatriculation): self
    {
        $this->plaqueImatriculation = $plaqueImatriculation;
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

    public function getDateImatriculation(): ?\DateTimeInterface
    {
        return $this->dateImatriculation;
    }

    public function setDateImatriculation(\DateTimeInterface $dateImatriculation): self
    {
        $this->dateImatriculation = $dateImatriculation;
        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;
        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;
        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;
        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;
        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;
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
}