<?php

namespace ZeldaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materiau
 *
 * @ORM\Table(name="materiau")
 * @ORM\Entity(repositoryClass="ZeldaBundle\Repository\MateriauRepository")
 */
class Materiau
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
     * @ORM\Column(name="libelle", type="string", length=5000)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroIg", type="integer")
     */
    private $numeroIg;

    /**
     * @var string
     *
     * @ORM\Column(name="vignetteUrl", type="string", length=255)
     */
    private $vignetteUrl;

    /**
     * @var float
     *
     * @ORM\Column(name="energie", type="float")
     */
    private $energie;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\ManyToMany (targetEntity="ZeldaBundle\Entity\Lieu", cascade={"persist"})
     */
    private $lesLieux;

    /**
     * @ORM\ManyToMany (targetEntity="ZeldaBundle\Entity\Effet", cascade={"persist"})
     */
    private $lesEffets;


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
     * @return Materiau
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
     * Set numeroIg
     *
     * @param integer $numeroIg
     *
     * @return Materiau
     */
    public function setNumeroIg($numeroIg)
    {
        $this->numeroIg = $numeroIg;

        return $this;
    }

    /**
     * Get numeroIg
     *
     * @return int
     */
    public function getNumeroIg()
    {
        return $this->numeroIg;
    }

    /**
     * Set energie
     *
     * @param float $energie
     *
     * @return Materiau
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

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Materiau
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lesLieux = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lesEffets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set vignetteUrl
     *
     * @param string $vignetteUrl
     *
     * @return Materiau
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
     * Add lesLieux
     *
     * @param \ZeldaBundle\Entity\Lieu $lesLieux
     *
     * @return Materiau
     */
    public function addLesLieux(\ZeldaBundle\Entity\Lieu $lesLieux)
    {
        $this->lesLieux[] = $lesLieux;

        return $this;
    }

    /**
     * Remove lesLieux
     *
     * @param \ZeldaBundle\Entity\Lieu $lesLieux
     */
    public function removeLesLieux(\ZeldaBundle\Entity\Lieu $lesLieux)
    {
        $this->lesLieux->removeElement($lesLieux);
    }

    /**
     * Get lesLieux
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLesLieux()
    {
        return $this->lesLieux;
    }

    /**
     * Add lesEffet
     *
     * @param \ZeldaBundle\Entity\Effet $lesEffet
     *
     * @return Materiau
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
}
