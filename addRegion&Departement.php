<?php
require "bootstrap.php";



$coteDOr = new Imie\Entity\Departement();
$coteDOr -> setNom("vaucluse");

$ain = new Imie\Entity\Departement();
$ain -> setNom("gard");

$region = new Imie\Entity\Region();
$region -> setNom("Nord");





$region -> addDepartement($coteDOr);
$region -> addDepartement($ain);

//$coteDOr -> setRegion($region);
//$ain -> setRegion($region);
$entityManager -> persist ($region);
//$entityManager -> persist ($coteDOr);
//$entityManager -> persist ($ain);


$entityManager -> flush();



 ?>
