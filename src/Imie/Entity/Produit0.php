<?php

namespace Imie\Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Table(name="Produit0")
 * @Entity
 */
class Produit0
{

    /**
     * @Column(name="idProduit0", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $identifiantProduit;

    /**
     * @Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;



    public function getIdentifiantProduit()
    {
        return $this->identifiantProduit;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
}
