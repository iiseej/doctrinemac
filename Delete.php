<?php


require "bootstrap.php";

$productImageRepository = $entityManager->getRepository('Imie\Entity\ProductImage');


$prod=$productImageRepository->find(1);
$entityManager->remove($prod);
$entityManager->flush();
