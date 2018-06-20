<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DirectorRepository")
 */
class Director
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
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $careerYear;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numberFilms;

    /**
     * @return mixed
     */
    public function getFilms()
    {
        return $this->films;
    }

    /**
     * Get director full name
     *
     * @return string
     */
    public function getDirectorFullName()
    {
        return $this->lastName.' '.$this->firstName;
    }

    /**
     * @param mixed $films
     * @return Director
     */
    public function setFilms($films)
    {
        $this->films = $films;
        return $this;
    }

    /**
     * Many Directors have Many Films.
     * @ORM\ManyToMany(targetEntity="Films", mappedBy="directors")
     */
    private $films;

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

    public function setFirstName(string $firstName): self
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

    /**
     * @return mixed
     */
    public function getNumberFilms()
    {
        return $this->numberFilms;
    }

    /**
     * @param mixed $numberFilms
     * @return Director
     */
    public function setNumberFilms($numberFilms)
    {
        $this->numberFilms = $numberFilms;
        return $this;
    }


}
