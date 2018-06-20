<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ActorRepository")
 */
class Actor
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $careerYear;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numberOfFilmsPlayed;

    /**
     * Many Actors have Many Films.
     * @ORM\ManyToMany(targetEntity="Films", mappedBy="actors")
     */
    private $films;

    public function __construct() {
        $this->films = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get actor full name
     *
     * @return string
     */
    public function getActorFullName()
    {
        return $this->lastName.' '.$this->firstName;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getCareerYear(): ?int
    {
        return $this->careerYear;
    }

    public function setCareerYear(?int $careerYear): self
    {
        $this->careerYear = $careerYear;

        return $this;
    }

    public function getNumberOfFilmsPlayed(): ?int
    {
        return $this->numberOfFilmsPlayed;
    }

    public function setNumberOfFilmsPlayed(?int $numberOfFilmsPlayed): self
    {
        $this->numberOfFilmsPlayed = $numberOfFilmsPlayed;

        return $this;
    }
}
