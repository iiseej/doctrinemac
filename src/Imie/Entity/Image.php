<?php

namespace Imie\Entity;

/**
 * @Table(name="images")
 * @Entity(repositoryClass="ImageRepository")
 */

class Image{

  /** @Id @Column(type="integer") @GeneratedValue **/
  private $id;

  /** @Column(type="string",length=140) **/
  private $nameImage;

  public function getId(){
    return $this->id;
  }

  public function getNameImage(){
    return $this->nameImage;
  }

  public function setName($nameImage){
    $this->nameImage = $nameImage;
  }

  }
