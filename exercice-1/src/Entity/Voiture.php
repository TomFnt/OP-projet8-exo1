<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VoitureRepository::class)]
class Voiture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $vehicle_type = null;

    #[ORM\Column(length: 255)]
    private ?string $motor_type = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column]
    private ?int $places = null;

    #[ORM\Column]
    private ?bool $isManual = null;

    #[ORM\Column]
    private ?float $dailyPrice = null;

    #[ORM\Column]
    private ?float $annualPrice = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getVehicleType(): ?string
    {
        return $this->vehicle_type;
    }

    public function setVehicleType(string $vehicle_type): static
    {
        $this->vehicle_type = $vehicle_type;

        return $this;
    }

    public function getMotorType(): ?string
    {
        return $this->motor_type;
    }

    public function setMotorType(string $motor_type): static
    {
        $this->motor_type = $motor_type;

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

    public function getPlaces(): ?int
    {
        return $this->places;
    }

    public function setPlaces(int $places): static
    {
        $this->places = $places;

        return $this;
    }

    public function isIsManual(): ?bool
    {
        return $this->isManual;
    }

    public function setIsManual(bool $isManual): static
    {
        $this->isManual = $isManual;

        return $this;
    }

    public function getDailyPrice(): ?float
    {
        return $this->dailyPrice;
    }

    public function setDailyPrice(float $dailyPrice): static
    {
        $this->dailyPrice = $dailyPrice;

        return $this;
    }

    public function getAnnualPrice(): ?float
    {
        return $this->annualPrice;
    }

    public function setAnnualPrice(float $annualPrice): static
    {
        $this->annualPrice = $annualPrice;

        return $this;
    }
}
