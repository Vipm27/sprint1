<?php

namespace App\Entity;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/** Recommendation
 *
 * @ORM\Entity
 */
#[ApiResource]


class Recommendation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;
    /**
     * @ORM\Column
     */
    private string $name ='';
    /**
     * @ORM\Column(type="float")
     */
    private float $temperatureRange;
    /**
     * @ORM\Column(type="float")
     */
    private float $humidityRange;
    /**
     * @ORM\Column(type="float")
     */
    private float $illuminationRange;
    /**
     * @ORM\Column(type="text")
     */
    private string $descriptionCare;
    /**
     * @ORM\Column(type="string")
     */
    private string $createdAt;
    /**
     * @ORM\Column(type="integer")
     */
    private int $createdBy;
    /**
     * @ORM\Column(type="string")
     */
    private string $modifiedAt;
    /**
     * @ORM\Column(type="integer")
     */
    private int $modifiedBy;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getTemperatureRange(): float
    {
        return $this->temperatureRange;
    }

    /**
     * @param float $temperatureRange
     */
    public function setTemperatureRange(float $temperatureRange): void
    {
        $this->temperatureRange = $temperatureRange;
    }

    /**
     * @return float
     */
    public function getHumidityRange(): float
    {
        return $this->humidityRange;
    }

    /**
     * @param float $humidityRange
     */
    public function setHumidityRange(float $humidityRange): void
    {
        $this->humidityRange = $humidityRange;
    }

    /**
     * @return float
     */
    public function getIlluminationRange(): float
    {
        return $this->illuminationRange;
    }

    /**
     * @param float $illuminationRange
     */
    public function setIlluminationRange(float $illuminationRange): void
    {
        $this->illuminationRange = $illuminationRange;
    }

    /**
     * @return string
     */
    public function getDescriptionCare(): string
    {
        return $this->descriptionCare;
    }

    /**
     * @param string $descriptionCare
     */
    public function setDescriptionCare(string $descriptionCare): void
    {
        $this->descriptionCare = $descriptionCare;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return int
     */
    public function getCreatedBy(): int
    {
        return $this->createdBy;
    }

    /**
     * @param int $createdBy
     */
    public function setCreatedBy(int $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return string
     */
    public function getModifiedAt(): string
    {
        return $this->modifiedAt;
    }

    /**
     * @param string $modifiedAt
     */
    public function setModifiedAt(string $modifiedAt): void
    {
        $this->modifiedAt = $modifiedAt;
    }

    /**
     * @return int
     */
    public function getModifiedBy(): int
    {
        return $this->modifiedBy;
    }

    /**
     * @param int $modifiedBy
     */
    public function setModifiedBy(int $modifiedBy): void
    {
        $this->modifiedBy = $modifiedBy;
    }

}