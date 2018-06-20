<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FilmsRepository")
 */
class Films
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
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $originalTitle;

    /**
     * @ORM\Column(type="date")
     */
    private $relaseDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $duration;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $synopsie;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $lienBa;

    /**
     * @return mixed
     */
    public function getLienBa()
    {
        return $this->lienBa;
    }

    /**
     * @param mixed $lienBa
     * @return Films
     */
    public function setLienBa($lienBa)
    {
        $this->lienBa = $lienBa;
        return $this;
    }

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $pressNote;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $publicNote;

    /**
     * @ORM\Column(type="boolean")
     */
    private $novelty;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $critical;

    /**
     * @var
     * @ORM\OneToOne(targetEntity="Picture", cascade={"persist"})
     */
    private $picture;

    /**
     * Many Films have Many Actors.
     * @ORM\ManyToMany(targetEntity="Actor", inversedBy="films")
     */
    private $actors;

    /**
     * Many Films have Many Directors.
     * @ORM\ManyToMany(targetEntity="Director", inversedBy="films")
     */
    private $directors;

    /**
     * Many Films have Many Type.
     * @ORM\ManyToMany(targetEntity="TypeFilms", inversedBy="films")
     */
    private $types;

    /**
     * Many PublicAge have One Film.
     * @ORM\ManyToOne(targetEntity="PublicAge", inversedBy="films")
     */
    private $publicAge;

    /**
     * Many YearOfProduction have One Film.
     * @ORM\ManyToOne(targetEntity="YearOfProduction", inversedBy="films")
     */
    private $yearOfProduction;

    /**
     * @return mixed
     */
    public function getDirectors()
    {
        return $this->directors;
    }

    /**
     * @param mixed $directors
     * @return Films
     */
    public function setDirectors($directors)
    {
        $this->directors = $directors;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPublicAge()
    {
        return $this->publicAge;
    }

    /**
     * @param mixed $publicAge
     * @return Films
     */
    public function setPublicAge($publicAge)
    {
        $this->publicAge = $publicAge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getYearOfProduction()
    {
        return $this->yearOfProduction;
    }

    /**
     * @param mixed $yearOfProduction
     * @return Films
     */
    public function setYearOfProduction($yearOfProduction)
    {
        $this->yearOfProduction = $yearOfProduction;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param mixed $types
     * @return Films
     */
    public function setTypes($types)
    {
        $this->types = $types;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     * @return Films
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * Add actor
     *
     * @param \App\Entity\Actor $films
     *
     * @return Films
     */
    public function addActors( \App\Entity\Actor $actor)
    {
        $this->actors[] = $actor;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param mixed $actors
     */
    public function setActors($actors)
    {
        $this->actors = $actors;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getOriginalTitle(): ?string
    {
        return $this->originalTitle;
    }

    public function setOriginalTitle(?string $originalTitle): self
    {
        $this->originalTitle = $originalTitle;

        return $this;
    }

    public function getRelaseDate(): ?\DateTimeInterface
    {
        return $this->relaseDate;
    }

    public function setRelaseDate(\DateTimeInterface $relaseDate): self
    {
        $this->relaseDate = $relaseDate;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getSynopsie(): ?string
    {
        return $this->synopsie;
    }

    public function setSynopsie(?string $synopsie): self
    {
        $this->synopsie = $synopsie;

        return $this;
    }

    public function getPressNote(): ?int
    {
        return $this->pressNote;
    }

    public function setPressNote(?int $pressNote): self
    {
        $this->pressNote = $pressNote;

        return $this;
    }

    public function getPublicNote(): ?int
    {
        return $this->publicNote;
    }

    public function setPublicNote(?int $publicNote): self
    {
        $this->publicNote = $publicNote;

        return $this;
    }

    public function getNovelty(): ?bool
    {
        return $this->novelty;
    }

    public function setNovelty(bool $novelty): self
    {
        $this->novelty = $novelty;

        return $this;
    }

    public function getCritical(): ?string
    {
        return $this->critical;
    }

    public function setCritical(?string $critical): self
    {
        $this->critical = $critical;

        return $this;
    }
}
