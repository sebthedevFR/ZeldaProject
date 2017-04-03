<?php

namespace ZeldaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieAnimaux
 *
 * @ORM\Table(name="categorie_animaux")
 * @ORM\Entity(repositoryClass="ZeldaBundle\Repository\CategorieAnimauxRepository")
 */
class CategorieAnimaux
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
     * @ORM\Column(name="libelleNoEspaceAnimaux", type="string", length=255)
     */
    private $libelleNoEspaceAnimaux;


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
     * @return CategorieAnimaux
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
     * Set libelleNoEspaceAnimaux
     *
     * @param string $libelleNoEspaceAnimaux
     *
     * @return CategorieAnimaux
     */
    public function setLibelleNoEspaceAnimaux($libelleNoEspaceAnimaux)
    {
        $this->libelleNoEspaceAnimaux = $libelleNoEspaceAnimaux;

        return $this;
    }

    /**
     * Get libelleNoEspaceAnimaux
     *
     * @return string
     */
    public function getLibelleNoEspaceAnimaux()
    {
        return $this->libelleNoEspaceAnimaux;
    }
}
