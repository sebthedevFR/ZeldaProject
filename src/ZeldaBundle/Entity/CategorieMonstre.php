<?php

namespace ZeldaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieMonstre
 *
 * @ORM\Table(name="categorie_monstre")
 * @ORM\Entity(repositoryClass="ZeldaBundle\Repository\CategorieMonstreRepository")
 */
class CategorieMonstre
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
     * @ORM\Column(name="libelleNoEspaceMonstre", type="string", length=255)
     */
    private $libelleNoEspaceMonstre;


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
     * @return CategorieMonstre
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
     * Set libelleNoEspaceMonstre
     *
     * @param string $libelleNoEspaceMonstre
     *
     * @return CategorieMonstre
     */
    public function setLibelleNoEspaceMonstre($libelleNoEspaceMonstre)
    {
        $this->libelleNoEspaceMonstre = $libelleNoEspaceMonstre;

        return $this;
    }

    /**
     * Get libelleNoEspaceMonstre
     *
     * @return string
     */
    public function getLibelleNoEspaceMonstre()
    {
        return $this->libelleNoEspaceMonstre;
    }
}
