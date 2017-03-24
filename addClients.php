<?php


require "bootstrap.php";



$client1 = new Imie\Entity\Client();
$client1->setNom("client1");
$client2 = new Imie\Entity\Client();
$client2->setNom("client2");

$produit1 = new Imie\Entity\Produit();
$produit1->setNom("produit1");
$produit2 = new Imie\Entity\Produit();
$produit2->setNom("produit2");

$produit1->setClients($client1);
$client1->addProduit($produit1);
$client1->setProduits($produit2);

$entityManager->persist($produit1);
$entityManager->flush();
