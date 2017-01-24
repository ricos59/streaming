<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Serie
 *
 * @ORM\Table(name="serie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SerieRepository")
 */
class Serie {

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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsis", type="text")
     */
    private $synopsis;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_saisons", type="integer")
     */
    private $nbSaisons;

    /**
     * @ORM\ManyToOne(targetEntity="Lien")
     * @ORM\JoinColumn(name="lien_id")
     */
    private $lienAssocie;

    /**
     * @ORM\ManyToOne(targetEntity="Saison")
     * @ORM\JoinColumn(name="saison_id")
     */
    private $saisonAssocie;

    /**
     * @ORM\ManyToOne(targetEntity="Genre")
     * @ORM\JoinColumn(name="genre_id")
     */
    private $genreAssocie;

    /**
     * @ORM\ManyToOne(targetEntity="Pays")
     * @ORM\JoinColumn(name="pays_id")
     */
    private $paysAssocie;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Serie
     */
    public function setTitre($titre) {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Set synopsis
     *
     * @param string $synopsis
     *
     * @return Serie
     */
    public function setSynopsis($synopsis) {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get synopsis
     *
     * @return string
     */
    public function getSynopsis() {
        return $this->synopsis;
    }

    /**
     * Set nbSaisons
     *
     * @param integer $nbSaisons
     *
     * @return Serie
     */
    public function setNbSaisons($nbSaisons) {
        $this->nbSaisons = $nbSaisons;

        return $this;
    }

    /**
     * Get nbSaisons
     *
     * @return int
     */
    public function getNbSaisons() {
        return $this->nbSaisons;
    }

    /**
     * Set lienAssocie
     *
     * @param \AppBundle\Entity\Lien $lienAssocie
     *
     * @return Serie
     */
    public function setLienAssocie(\AppBundle\Entity\Lien $lienAssocie = null) {
        $this->lienAssocie = $lienAssocie;

        return $this;
    }

    /**
     * Get lienAssocie
     *
     * @return \AppBundle\Entity\Lien
     */
    public function getLienAssocie() {
        return $this->lienAssocie;
    }

    /**
     * Set saisonAssocie
     *
     * @param \AppBundle\Entity\Lien $saisonAssocie
     *
     * @return Serie
     */
    public function setSaisonAssocie(\AppBundle\Entity\Lien $saisonAssocie = null) {
        $this->saisonAssocie = $saisonAssocie;

        return $this;
    }

    /**
     * Get saisonAssocie
     *
     * @return \AppBundle\Entity\Lien
     */
    public function getSaisonAssocie() {
        return $this->saisonAssocie;
    }

    /**
     * Set genreAssocie
     *
     * @param \AppBundle\Entity\Genre $genreAssocie
     *
     * @return Serie
     */
    public function setGenreAssocie(\AppBundle\Entity\Genre $genreAssocie = null) {
        $this->genreAssocie = $genreAssocie;

        return $this;
    }

    /**
     * Get genreAssocie
     *
     * @return \AppBundle\Entity\Genre
     */
    public function getGenreAssocie() {
        return $this->genreAssocie;
    }


    /**
     * Set paysAssocie
     *
     * @param \AppBundle\Entity\Pays $paysAssocie
     *
     * @return Serie
     */
    public function setPaysAssocie(\AppBundle\Entity\Pays $paysAssocie = null)
    {
        $this->paysAssocie = $paysAssocie;

        return $this;
    }

    /**
     * Get paysAssocie
     *
     * @return \AppBundle\Entity\Pays
     */
    public function getPaysAssocie()
    {
        return $this->paysAssocie;
    }
}
