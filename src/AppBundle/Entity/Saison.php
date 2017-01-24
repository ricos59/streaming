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
}

