<?php

namespace Imie\Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Table(name="Produit")
 * @Entity
 */
class Produit
{

    /**
     * @Column(name="idProduit", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $identifiantProduit;

    /**
     * @Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
         * @var ArrayCollection Produit $clients
         *
         * Inverse Side
         *
         * ManyToMany(targetEntity="Client", mappedBy="produits", cascade={"persist", "merge"})
         */
    private $clients;

    /**
     * @return int
     */
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

    /**
     * Add Client
     *
     * @param Client $client
     */
    public function addClient(Client $client)
    {
        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
        if (!$this->clients->contains($client)) {
            if (!$client->getProduits()->contains($this)) {
                $client->addProduit($this);  // Lie le Client au produit.
            }
            $this->clients->add($client);
        }
    }

    public function setClients($items)
    {
        if ($items instanceof ArrayCollection || is_array($items)) {
            foreach ($items as $item) {
                $this->addClient($item);
            }
        } elseif ($items instanceof Client) {
            $this->addClient($items);
        } else {
            throw new Exception("$items must be an instance of Client or ArrayCollection");
        }
    }

    /**
     * Get ArrayCollection
     *
     * @return ArrayCollection $clients
     */
    public function getClients()
    {
        return $this->clients;
    }

    public function __construct()
    {
        $this->clients = new ArrayCollection();
    }

}
