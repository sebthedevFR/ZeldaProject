<?php

namespace ZeldaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="ZeldaBundle\Repository\CategorieRepository")
 */
class Categorie
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
     * @ORM\Column(name="libelleNoEspace", type="string", length=255)
     */
    private $libelleNoEspace;


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
     * @return Categorie
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
    public function __toString()
    {
        return $this->libelle;
    }

    /**
     * Set libelleNoEspace
     *
     * @param string $libelleNoEspace
     *
     * @return Categorie
     */
    public function setLibelleNoEspace($libelleNoEspace)
    {
        $this->libelleNoEspace = $libelleNoEspace;

        return $this;
    }

    /**
     * Get libelleNoEspace
     *
     * @return string
     */
    public function getLibelleNoEspace()
    {
        return $this->libelleNoEspace;
    }
}
