<?php

namespace ZeldaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieMateriau
 *
 * @ORM\Table(name="categorie_materiau")
 * @ORM\Entity(repositoryClass="ZeldaBundle\Repository\CategorieMateriauRepository")
 */
class CategorieMateriau
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
     * @ORM\Column(name="libellenoespace", type="string", length=255)
     */
    private $libellenoespace;


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
     * @return CategorieMateriau
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
     * Set libellenoespace
     *
     * @param string $libellenoespace
     *
     * @return CategorieMateriau
     */
    public function setLibellenoespace($libellenoespace)
    {
        $this->libellenoespace = $libellenoespace;

        return $this;
    }

    /**
     * Get libellenoespace
     *
     * @return string
     */
    public function getLibellenoespace()
    {
        return $this->libellenoespace;
    }

    public function __toString()
    {
        return $this->libelle;
    }
}
