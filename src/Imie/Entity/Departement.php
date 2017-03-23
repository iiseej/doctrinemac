<?php

namespace Imie\Entity;
/**
 * @Table(name="Departement")
 * @Entity
 */
class Departement
{
    /**
     * @var decimal $identifiantDepartement
     *
     * @Column(name="idDepartement", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $identifiantDepartement;

   /**
     * @var text $nom
     *
     * @Column(name="nom", type="string", length=60, nullable=true)
     */
    private $nom;
        /**
         * @var Region $region
         *
         * @ManyToOne(targetEntity="Imie\Entity\Region", inversedBy="departements", cascade={"persist", "merge"})
         * @JoinColumns({
         * @JoinColumn(name="Region_idRegion", referencedColumnName="idRegion")
         * })
         */

   private $region;

   /**
     * @return decimal $identifiantDepartement
     */
    public function getIdentifiantDepartement()
    {
        return $this->identifiantDepartement;
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
     * @param BRegion $region
     */
    public function setRegion(Region $region)
    {
        $this->region = $region;
    }

   /**
     * @return BRegion $region
     */
    public function getRegion()
    {
        return $this->region;
    }
}
