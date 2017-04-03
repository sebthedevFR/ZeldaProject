<?php

namespace ZeldaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Animaux
 *
 * @ORM\Table(name="animaux")
 * @ORM\Entity(repositoryClass="ZeldaBundle\Repository\AnimauxRepository")
 */
class Animaux
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
     * @ORM\Column(name="Libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", length=5555)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="vignetteUrl", type="string", length=5555)
     */
    private $vignetteUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroIg", type="integer")
     */
    private $numeroIg;

    /**
     *
     * @ORM\ManyToOne(targetEntity="ZeldaBundle\Entity\CategorieAnimaux")
     */
    private $laCategorieAnimaux;

    /**
     * @ORM\ManyToMany (targetEntity="ZeldaBundle\Entity\Lieu", cascade={"persist"})
     */
    private $lesLieux;

    /**
     * @ORM\ManyToMany (targetEntity="ZeldaBundle\Entity\Image", cascade={"persist"})
     */
    private $lesImages;

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
     * @return Animaux
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
     * @return Animaux
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
     * Set numeroIg
     *
     * @param integer $numeroIg
     *
     * @return Animaux
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
     * Set laCategorieAnimaux
     *
     * @param \ZeldaBundle\Entity\CategorieAnimaux $laCategorieAnimaux
     *
     * @return Animaux
     */
    public function setLaCategorieAnimaux(\ZeldaBundle\Entity\CategorieAnimaux $laCategorieAnimaux = null)
    {
        $this->laCategorieAnimaux = $laCategorieAnimaux;

        return $this;
    }

    /**
     * Get laCategorieAnimaux
     *
     * @return \ZeldaBundle\Entity\CategorieAnimaux
     */
    public function getLaCategorieAnimaux()
    {
        return $this->laCategorieAnimaux;
    }
     public function __toString()
     {
         return $this->libelle;
     }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lesLieux = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lesImages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lesMateriaux = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add lesLieux
     *
     * @param \ZeldaBundle\Entity\Lieu $lesLieux
     *
     * @return Animaux
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
     * Add lesImage
     *
     * @param \ZeldaBundle\Entity\Image $lesImage
     *
     * @return Animaux
     */
    public function addLesImage(\ZeldaBundle\Entity\Image $lesImage)
    {
        $this->lesImages[] = $lesImage;

        return $this;
    }

    /**
     * Remove lesImage
     *
     * @param \ZeldaBundle\Entity\Image $lesImage
     */
    public function removeLesImage(\ZeldaBundle\Entity\Image $lesImage)
    {
        $this->lesImages->removeElement($lesImage);
    }

    /**
     * Get lesImages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLesImages()
    {
        return $this->lesImages;
    }

    /**
     * Add lesMateriaux
     *
     * @param \ZeldaBundle\Entity\Materiau $lesMateriaux
     *
     * @return Animaux
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
     * Set description
     *
     * @param string $description
     *
     * @return Animaux
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
}
