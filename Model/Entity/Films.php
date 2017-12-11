<?php
namespace Model\Entity;
class Films{
private $id;
private $title;
private $release_year;
private $format;
private $stars;

    /**
     * Films constructor.
     * @param $id
     * @param $title
     * @param $release_year
     * @param $format
     * @param $stars
     */
    public function __construct($id, $title, $release_year, $format, $stars)
    {
        $this->id = $id;
        $this->title = $title;
        $this->release_year = $release_year;
        $this->format = $format;
        $this->stars = $stars;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReleaseYear()
    {
        return $this->release_year;
    }

    /**
     * @param mixed $realease_year
     */
    public function setReleaseYear($release_year)
    {
        $this->release_year = $release_year;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param mixed $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * @param mixed $stars
     */
    public function setStars($stars)
    {
        $this->stars = $stars;
        return $this;
    }


}