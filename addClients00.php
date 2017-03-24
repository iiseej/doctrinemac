<?php

require "bootstrap.php";


//$client1= new Imie\Entity\Client();
//$client1 -> setNom("client1");
//
//$produit1 = new Imie\Entity\Produit();
//$produit1->setNom("produit1");
//
//$client1->addProduit($produit1);

//$client2= new Imie\Entity\Client();
//$client2 -> setNom("client2");
//
////$produit2 = new Imie\Entity\Produit();
////$produit2->setNom("produit2");
//
$repoProduit = $entityManager->getRepository ("Imie\Entity\Produit");
//
//
$repoClient = $entityManager->getRepository ("Imie\Entity\Client");

$repoClient -> findBy(array("nom" , "client2")) -> addProduit($repoProduit -> find(2) );
$repoClient -> findBy(array("nom" , "client2"))-> addProduit($repoProduit -> find(3) );
$repoClient -> findBy(array("nom" , "client2"))-> addProduit($repoProduit -> find(4) );


//$produit2 = new Imie\Entity\Produit();
//$produit2->setNom("produit2");
//
//$produit3 = new Imie\Entity\Produit();
//$produit3->setNom("produit3");
//
//$produit4 = new Imie\Entity\Produit();
//$produit4->setNom("produit4");

//$entityManager -> persist ($produit2);
//$entityManager -> persist ($produit3);
//$entityManager -> persist ($produit4);
$entityManager -> flush();






//$client2->addProduit();



//$entityManager -> persist ($client2);
//$entityManager -> flush();
