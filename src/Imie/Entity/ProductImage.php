<?php

  //ProductImage.php
namespace Imie\Entity;


/**
 * @Table(name="productsImage")
 * @Entity(repositoryClass="ProductRepository")
 */

class ProductImage{

  /** @Id @Column(type="integer") @GeneratedValue **/
  protected $id;

  /** @Column(type="string",length=140) **/
  protected $name;

  /**
   * @OneToOne(targetEntity = "Imie\Entity\Image")
   * @JoinColumn(name="image_id", referencedColumnName="id") //facultatif !
   */
  private $image;

  public function getId(){
    return $this->id;
  }
  public function getName(){
    return $this->name;
  }

  public function setName($name){
    $this->name = $name;
  }

  public function setImage(Image $image = null)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }

}
