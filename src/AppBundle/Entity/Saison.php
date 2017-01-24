<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saison
 *
 * @ORM\Table(name="saison")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SaisonRepository")
 */
class Saison
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_saison", type="integer", length=255)
     */
    private $numeroSaison;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_episode", type="integer", length=255)
     */
    private $nombreEpisode;
    
     /**
     * @ORM\OneToMany(targetEntity="Serie", mappedBy="saisonAssocie")
     */
    private $series;
    
     /**
     * @ORM\OneToMany(targetEntity="Episode", mappedBy="episodeAssocie")
     */
    private $episodes;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numeroSaison
     *
     * @param string $numeroSaison
     *
     * @return Saison
     */
    public function setNumeroSaison($numeroSaison)
    {
        $this->numeroSaison = $numeroSaison;

        return $this;
    }

    /**
     * Get numeroSaison
     *
     * @return string
     */
    public function getNumeroSaison()
    {
        return $this->numeroSaison;
    }

    /**
     * Set nombreEpisode
     *
     * @param string $nombreEpisode
     *
     * @return Saison
     */
    public function setNombreEpisode($nombreEpisode)
    {
        $this->nombreEpisode = $nombreEpisode;

        return $this;
    }

    /**
     * Get nombreEpisode
     *
     * @return string
     */
    public function getNombreEpisode()
    {
        return $this->nombreEpisode;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->series = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add series
     *
     * @param \AppBundle\Entity\Serie $series
     *
     * @return Saison
     */
    public function addSeries(\AppBundle\Entity\Serie $series)
    {
        $this->series[] = $series;

        return $this;
    }

    /**
     * Remove series
     *
     * @param \AppBundle\Entity\Serie $series
     */
    public function removeSeries(\AppBundle\Entity\Serie $series)
    {
        $this->series->removeElement($series);
    }

    /**
     * Get series
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Add episode
     *
     * @param \AppBundle\Entity\Episode $episode
     *
     * @return Saison
     */
    public function addEpisode(\AppBundle\Entity\Episode $episode)
    {
        $this->episodes[] = $episode;

        return $this;
    }

    /**
     * Remove episode
     *
     * @param \AppBundle\Entity\Episode $episode
     */
    public function removeEpisode(\AppBundle\Entity\Episode $episode)
    {
        $this->episodes->removeElement($episode);
    }

    /**
     * Get episodes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }
}
