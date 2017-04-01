<?php

namespace ZeldaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arme
 *
 * @ORM\Table(name="arme")
 * @ORM\Entity(repositoryClass="ZeldaBundle\Repository\ArmeRepository")
 */
class Arme
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
     * @ORM\Column(name="description", type="text", length=5000)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="efficacite", type="integer")
     */
    private $efficacite;

    /**
     * @var string
     *
     * @ORM\Column(name="vignetteUrl", type="string", length=255)
     */
    private $vignetteUrl;

    /**
     * @ORM\ManyToOne(targetEntity="ZeldaBundle\Entity\Categorie")
     */
    private $laCategorie;

    /**
     * @ORM\ManyToMany (targetEntity="ZeldaBundle\Entity\Lieu", cascade={"persist"})
     */
    private $lesLieux;

    /**
     * @ORM\ManyToMany (targetEntity="ZeldaBundle\Entity\Image", cascade={"persist"})
     */
    private $lesImages;


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
     * @return Arme
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
     * @return Arme
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
     * Set efficacite
     *
     * @param integer $efficacite
     *
     * @return Arme
     */
    public function setEfficacite($efficacite)
    {
        $this->efficacite = $efficacite;

        return $this;
    }

    /**
     * Get efficacite
     *
     * @return int
     */
    public function getEfficacite()
    {
        return $this->efficacite;
    }

    /**
     * Set vignetteUrl
     *
     * @param string $vignetteUrl
     *
     * @return Arme
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
     * Set description
     *
     * @param string $description
     *
     * @return Arme
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
     * Set laCategorie
     *
     * @param \ZeldaBundle\Entity\Categorie $laCategorie
     *
     * @return Arme
     */
    public function setLaCategorie(\ZeldaBundle\Entity\Categorie $laCategorie = null)
    {
        $this->laCategorie = $laCategorie;

        return $this;
    }

    /**
     * Get laCategorie
     *
     * @return \ZeldaBundle\Entity\Categorie
     */
    public function getLaCategorie()
    {
        return $this->laCategorie;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lesLieux = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lesImages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add lesLieux
     *
     * @param \ZeldaBundle\Entity\Lieu $lesLieux
     *
     * @return Arme
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
     * @return Arme
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

    public function __toString()
    {
        return $this->libelle;
    }
}
