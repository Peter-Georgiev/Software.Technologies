<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anime
 *
 * @ORM\Table(name="animes",
 *     options={"collate":"utf8_general_ci", "charset":"utf8", "engine":"InnoDB"})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnimeRepository")
 */
class Anime
{
    /*
        •	id – technology-dependent identifier (ObjectID for JavaScript, int for all other technologies)
        •	rating – non-null integer
        •	name – non-empty text
        •	description – non-empty text
        •	watched – non-empty text (will either be “watched” or “not watched”).
     */

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="rating", type="integer", nullable=false)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="watched", type="string", length=255, nullable=false)
     */
    private $watched;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return Anime
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param $rating
     * @return Anime
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return Anime
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $description
     * @return Anime
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getWatched()
    {
        return $this->watched;
    }

    /**
     * @param $watched
     * @return Animephp php
     * dfsgsdfg
     *
     *
     *
     * gdsfg
     */
    public function setWatched($watched)
    {
        $this->watched = $watched;

        return $this;
    }
}

