<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\YearOfProductionRepository")
 */
class YearOfProduction
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $year;

    /**
     * One YearOfProduction has Many Films.
     * @ORM\OneToMany(targetEntity="Films", mappedBy="YearOfProduction")
     */
    private $films;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFilms()
    {
        return $this->films;
    }

    /**
     * @param mixed $films
     * @return YearOfProduction
     */
    public function setFilms($films)
    {
        $this->films = $films;
        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }
}
