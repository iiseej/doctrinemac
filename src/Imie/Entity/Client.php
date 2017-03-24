<?php
namespace Imie\Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Table(name="Client")
 * @Entity
 */
class Client
{

    /**
     * @Column(name="idClient", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $identifiantClient;

    /**
     * @Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;
    /**
         * @var ArrayCollection Produit $produits
         * Owning Side
         *
         * @ManyToMany(targetEntity="Produit", inversedBy="clients", cascade={"persist", "merge"})
         * @JoinTable(name="Acheter",
         *   joinColumns={@JoinColumn(name="Client_idClient", referencedColumnName="idClient")},
         *   inverseJoinColumns={@JoinColumn(name="Produit_idProduit", referencedColumnName="idProduit")}
         * )
         */

    private $produits;

    /**
     * @return int
     */
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

    /**
     * Add Produit
     *
     * @param Produit $produit
     */
    public function addProduit(Produit $produit)
    {
        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
        if (!$this->produits->contains($produit)) {
            $this->produits->add($produit);
        }
    }

    public function setProduits($items)
    {
        if ($items instanceof ArrayCollection || is_array($items)) {
            foreach ($items as $item) {
                $this->addProduit($item);
            }
        } elseif ($items instanceof Produit) {
            $this->addProduit($items);
        } else {
            throw new Exception("$items must be an instance of Produit or ArrayCollection");
        }
    }

    /**
     * Get ArrayCollection
     *
     * @return ArrayCollection $produits
     */
    public function getProduits()
    {
        return $this->produits;
    }

    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }
}
