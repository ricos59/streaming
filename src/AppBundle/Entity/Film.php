<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FilmRepository")
 */
class Film {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Genre", inversedBy="films")
     * @ORM\JoinColumn(name="genre_id")
     */
    private $genreAssocie;

    /**
     * @ORM\ManyToOne(targetEntity="Pays", inversedBy="films")
     * @ORM\JoinColumn(name="pays_id")
     */
    private $paysAssocie;

    /**
     * @ORM\ManyToOne(targetEntity="Lien", inversedBy="films")
     * @ORM\JoinColumn(name="lien_id")
     */
    private $lienAssocie;

    /**
     * @ORM\ManyToMany(targetEntity="Casting", inversedBy="filmsRealises")
     * @ORM\JoinTable(name="film_realises",
     *          joinColumns={@ORM\JoinColumn(name="film_id", referencedColumnName="id")},
     *          inverseJoinColumns={@ORM\JoinColumn(name="casting_id", referencedColumnName="id")}
     *          )
     */
    private $realisateurs;

    /**
     * @var string
     * 
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsis", type="text", nullable=true)
     */
    private $synopsis;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @var int
     *
     * @ORM\Column(name="annee_prod", type="integer")
     */
    private $anneeProd;

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
     * @return Film
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
     * @return Film
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
     * Set duree
     *
     * @param integer $duree
     *
     * @return Film
     */
    public function setDuree($duree) {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return int
     */
    public function getDuree() {
        return $this->duree;
    }

    /**
     * Set anneeProd
     *
     * @param integer $anneeProd
     *
     * @return Film
     */
    public function setAnneeProd($anneeProd) {
        $this->anneeProd = $anneeProd;

        return $this;
    }

    /**
     * Get anneeProd
     *
     * @return int
     */
    public function getAnneeProd() {
        return $this->anneeProd;
    }

    /**
     * Set genreAssocie
     *
     * @param \AppBundle\Entity\Genre $genreAssocie
     *
     * @return Film
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
     * @return Film
     */
    public function setPaysAssocie(\AppBundle\Entity\Pays $paysAssocie = null) {
        $this->paysAssocie = $paysAssocie;

        return $this;
    }

    /**
     * Get paysAssocie
     *
     * @return \AppBundle\Entity\Pays
     */
    public function getPaysAssocie() {
        return $this->paysAssocie;
    }

    /**
     * Set lienAssocie
     *
     * @param \AppBundle\Entity\Lien $lienAssocie
     *
     * @return Film
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
     * Constructor
     */
    public function __construct()
    {
        $this->realisateurs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add realisateur
     *
     * @param \AppBundle\Entity\Casting $realisateur
     *
     * @return Film
     */
    public function addRealisateur(\AppBundle\Entity\Casting $realisateur)
    {
        $this->realisateurs[] = $realisateur;

        return $this;
    }

    /**
     * Remove realisateur
     *
     * @param \AppBundle\Entity\Casting $realisateur
     */
    public function removeRealisateur(\AppBundle\Entity\Casting $realisateur)
    {
        $this->realisateurs->removeElement($realisateur);
    }

    /**
     * Get realisateurs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRealisateurs()
    {
        return $this->realisateurs;
    }
}
