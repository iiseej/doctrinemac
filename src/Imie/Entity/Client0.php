<?php
namespace Imie\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Table(name="Client0")
 * @Entity
 */
class Client0
{

    /**
     * @Column(name="idClient0", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $identifiantClient;

    /**
     * @Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;




    public function getIdentifiantClient()
    {
        return $this->identifiantClient;
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
