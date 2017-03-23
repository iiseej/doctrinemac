<?php

require "bootstrap.php";



$q=$entityManager->createQuery("SELECT p from Imie\\Entity\\Product p where p.name like :name ");
$q->setParameter('name','%cend%');

$ps=$q->getResult();

if (count($ps)) {
  foreach ($ps as $p  ) {
    echo $p->getId()."-".$p->getName()."<br />";
  }
}
else {
  echo "aucun résultat";
}
?>
