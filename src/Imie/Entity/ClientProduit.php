<?php


namespace Imie\Entity;

use Doctrine\Common\Collections\ArrayCollection;



/**
 * @Table(name="ClientProduit")
 * @Entity
 */
class ClientProduit
{
  /**
   * @Column(name="idClientProduit", type="bigint", nullable=false)
   * @Id
   * @GeneratedValue(strategy="IDENTITY")
   */
  private $id;


  /**
   * @Column(name="quantite", type="string", length=45, nullable=true)
   */
  private $quantite;


  /**
   * @ManyToOne(targetEntity = "Imie\Entity\Client", inversedBy="ClientProduit")
   * @JoinColumn(name="Client_id", referencedColumnName="idClient", onDelete="CASCADE") //facultatif !
   */
   private $client;

/**
 * @ManyToOne(targetEntity = "Imie\Entity\Produit")
 * @JoinColumn(name="Produit_id", referencedColumnName="idProduit", onDelete="CASCADE") //facultatif !
 */

 private $produit;




    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Get the value of Quantite
     *
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set the value of Quantite
     *
     * @param mixed quantite
     *
     * @return self
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get the value of Client
     *
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of Client
     *
     * @param mixed client
     *
     * @return self
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get the value of Produit
     *
     * @return mixed
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set the value of Produit
     *
     * @param mixed produit
     *
     * @return self
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;

        return $this;
    }
}
