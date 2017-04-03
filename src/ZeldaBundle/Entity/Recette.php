<?php

namespace ZeldaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette
 *
 * @ORM\Table(name="recette")
 * @ORM\Entity(repositoryClass="ZeldaBundle\Repository\RecetteRepository")
 */
class Recette
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="vignetteUrl", type="string", length=255)
     */
    private $vignetteUrl;

    /**
     * @ORM\ManyToMany (targetEntity="ZeldaBundle\Entity\Effet", cascade={"persist"})
     */
    private $lesEffets;

    /**
     * @var float
     *
     * @ORM\Column(name="energie", type="float")
     */
    private $energie;

    /**
     * @ORM\ManyToMany (targetEntity="ZeldaBundle\Entity\Materiau", cascade={"persist"})
     */
    private $lesMateriaux;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Recette
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set vignetteUrl
     *
     * @param string $vignetteUrl
     *
     * @return Recette
     */
    public function setVignetteUrl($vignetteUrl)
    {
        $this->vignetteUrl = $vignetteUrl;

        return $this;
    }

    /**
     * Get vignetteUrl
     *
     * @return string
     */
    public function getVignetteUrl()
    {
        return $this->vignetteUrl;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lesEffets = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lesMateriaux = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add lesEffet
     *
     * @param \ZeldaBundle\Entity\Effet $lesEffet
     *
     * @return Recette
     */
    public function addLesEffet(\ZeldaBundle\Entity\Effet $lesEffet)
    {
        $this->lesEffets[] = $lesEffet;

        return $this;
    }

    /**
     * Remove lesEffet
     *
     * @param \ZeldaBundle\Entity\Effet $lesEffet
     */
    public function removeLesEffet(\ZeldaBundle\Entity\Effet $lesEffet)
    {
        $this->lesEffets->removeElement($lesEffet);
    }

    /**
     * Get lesEffets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLesEffets()
    {
        return $this->lesEffets;
    }

    /**
     * Add lesMateriaux
     *
     * @param \ZeldaBundle\Entity\Materiau $lesMateriaux
     *
     * @return Recette
     */
    public function addLesMateriaux(\ZeldaBundle\Entity\Materiau $lesMateriaux)
    {
        $this->lesMateriaux[] = $lesMateriaux;

        return $this;
    }

    /**
     * Remove lesMateriaux
     *
     * @param \ZeldaBundle\Entity\Materiau $lesMateriaux
     */
    public function removeLesMateriaux(\ZeldaBundle\Entity\Materiau $lesMateriaux)
    {
        $this->lesMateriaux->removeElement($lesMateriaux);
    }

    /**
     * Get lesMateriaux
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLesMateriaux()
    {
        return $this->lesMateriaux;
    }

    /**
     * Set energie
     *
     * @param float $energie
     *
     * @return Recette
     */
    public function setEnergie($energie)
    {
        $this->energie = $energie;

        return $this;
    }

    /**
     * Get energie
     *
     * @return float
     */
    public function getEnergie()
    {
        return $this->energie;
    }
}
