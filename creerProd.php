<?php

require "bootstrap.php";

$newProductName = $_GET['name'];

$product=new Imie\Entity\Product();
$product->setName ("$newProductName");
$entityManager->persist($product);
$entityManager->flush();

echo "created product id ".$product->getId();
 ?>
