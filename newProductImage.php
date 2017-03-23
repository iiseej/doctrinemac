<?php

require_once "bootstrap.php";

use Imie\Entity\ProductImage;
use Imie\Entity\Image;

$newProductImageName = $argv[1];
$newImageName = $argv[2];

$image = new Image;
$productImage = new ProductImage;

$image->setName($newImageName);
$productImage->setImage($image);
$productImage->setName($newProductImageName);

$entityManager->persist($productImage);
$entityManager->persist($image);
$entityManager->flush();
