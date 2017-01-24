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
     * @ORM\ManyToOne(targetEntity="Saison")
     * @ORM\JoinColumn(name="saison_id")
     */
    private $saisonAssocie;
    
    /**
     * @ORM\ManyToOne(targetEntity="Saison", inversedBy="episodes")
     * @ORM\JoinColumn(name="episode_id")
     */
    private $episodeAssocie;

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

    /**
     * Set saisonAssocie
     *
     * @param \AppBundle\Entity\Saison $saisonAssocie
     *
     * @return Episode
     */
    public function setSaisonAssocie(\AppBundle\Entity\Saison $saisonAssocie = null)
    {
        $this->saisonAssocie = $saisonAssocie;

        return $this;
    }

    /**
     * Get saisonAssocie
     *
     * @return \AppBundle\Entity\Saison
     */
    public function getSaisonAssocie()
    {
        return $this->saisonAssocie;
    }

    /**
     * Set episodeAssocie
     *
     * @param \AppBundle\Entity\Saison $episodeAssocie
     *
     * @return Episode
     */
    public function setEpisodeAssocie(\AppBundle\Entity\Saison $episodeAssocie = null)
    {
        $this->episodeAssocie = $episodeAssocie;

        return $this;
    }

    /**
     * Get episodeAssocie
     *
     * @return \AppBundle\Entity\Saison
     */
    public function getEpisodeAssocie()
    {
        return $this->episodeAssocie;
    }
}
