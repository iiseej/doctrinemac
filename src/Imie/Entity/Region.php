<?php
namespace Imie\Entity;

use Doctrine\Common\Collections\ArrayCollection;


/**
 * @Table(name="Region")
 * @Entity
 */

class Region
{
    /**
     * @var decimal $identifiantRegion
     *
     * @Column(name="idRegion", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue
     */
    private $identifiantRegion;

   /**
     * @var text $nom
     *
     * @Column(name="nom", type="string", length=60, nullable=true)
     */
    private $nom;

    /** @var ArrayCollection $departements
    * @OneToMany(targetEntity="Imie\Entity\Departement", mappedBy="region", cascade={"persist", "remove"})
    */
   private $departements;

   /**
     * @return decimal $identifiantRegion
     */
    public function getIdentifiantRegion()
    {
        return $this->identifiantRegion;
    }

   /**
     * @param text $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

   /**
     * @return text $nom
     */
    public function getNom()
    {
        return $this->nom;
    }

   /**
     * @param BDepartement $departements
     */
    public function addDepartement(Departement $departement) {
        $departement->setRegion($this);

       // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
        if (!$this->departements->contains($departement)) {
            $this->departements->add($departement);
        }
    }

   /**
     * @return ArrayCollection $departements
     */
    public function getDepartements() {
        return $this->departements;
    }

   public function __construct() {
        $this->departements = new ArrayCollection();
    }
}
