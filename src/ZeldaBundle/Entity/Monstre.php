<?php

namespace ZeldaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Monstre
 *
 * @ORM\Table(name="monstre")
 * @ORM\Entity(repositoryClass="ZeldaBundle\Repository\MonstreRepository")
 */
class Monstre
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
     * @ORM\Column(name="description", type="text", length=5000)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="vignetteUrl", type="string", length=255)
     */
    private $vignetteUrl;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroIg", type="integer")
     */
    private $numeroIg;

    /**
    * @ORM\ManyToOne(targetEntity="ZeldaBundle\Entity\CategorieMonstre")
    */
    private $laCategorieMonstre;

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
     * @return Monstre
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
     * @return Monstre
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
     * @return Monstre
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
     * Constructor
     */
    public function __construct()
    {
        $this->lesLieux = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lesImages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set laCategorieMonstre
     *
     * @param \ZeldaBundle\Entity\CategorieMonstre $laCategorieMonstre
     *
     * @return Monstre
     */
    public function setLaCategorieMonstre(\ZeldaBundle\Entity\CategorieMonstre $laCategorieMonstre = null)
    {
        $this->laCategorieMonstre = $laCategorieMonstre;

        return $this;
    }

    /**
     * Get laCategorieMonstre
     *
     * @return \ZeldaBundle\Entity\CategorieMonstre
     */
    public function getLaCategorieMonstre()
    {
        return $this->laCategorieMonstre;
    }

    /**
     * Add lesLieux
     *
     * @param \ZeldaBundle\Entity\Lieu $lesLieux
     *
     * @return Monstre
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
     * @return Monstre
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

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Monstre
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
     * Add lesMateriaux
     *
     * @param \ZeldaBundle\Entity\Materiau $lesMateriaux
     *
     * @return Monstre
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
}
