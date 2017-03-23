<?php

require "bootstrap.php";

$productRepository=$entityManager->getRepository('Imie\Entity\Product');
$products=$productRepository->findAll();

foreach ($products as $p) {
  echo $p->getId()."-".$p->getName()."<br />";
}

if (isset($_POST['id'])) {
  $id=$_POST['id'];
  $product=$productRepository->find($id);
  $productName=$product->getName();
}



 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="formulaire.php" method="post">
      <label for="id">recherche id </label><input type="number" name="id" value="">
      <button type="submit" name="button">recherche</button>
    </form>
<span> <?php echo $productName ?></span>
  </body>
</html>
