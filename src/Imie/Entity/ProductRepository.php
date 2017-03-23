<?php


namespace Imie\Entity;

use Doctrine\ORM\EntityRepository;


class ProductRepository extends EntityRepository{

return $this->createQueryBuilder(p)->orderBy('p.name','ASC')->getQuery()->getResult();


}
 ?>
