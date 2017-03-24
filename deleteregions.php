<?php


require "bootstrap.php";

$repo = $entityManager->getRepository('Imie\Entity\Departement');


$region=$repo->find(5);
$entityManager->remove($region);
$entityManager->flush();
