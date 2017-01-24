<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Episode
 *
 * @ORM\Table(name="episode")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EpisodeRepository")
 */
class Episode
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
     * @var int
     *
     * @ORM\Column(name="numero_episode", type="integer")
     */
    private $numeroEpisode;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;


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
     * Set numeroEpisode
     *
     * @param integer $numeroEpisode
     *
     * @return Episode
     */
    public function setNumeroEpisode($numeroEpisode)
    {
        $this->numeroEpisode = $numeroEpisode;

        return $this;
    }

    /**
     * Get numeroEpisode
     *
     * @return int
     */
    public function getNumeroEpisode()
    {
        return $this->numeroEpisode;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return Episode
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return int
     */
    public function getDuree()
    {
        return $this->duree;
    }
}

