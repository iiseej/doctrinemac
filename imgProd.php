<?php

require "bootstrap.php";

$productImageRepository  = $entityManager->getRepository("Imie\Entity\ProductImage");

echo $productImageRepository->find(1)->getImage()->getNameImage();






 ?>
