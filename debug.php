<?php

require 'application/vendor/autoload.php';

use PHPSkeleton\App\HarryPotter;
use PHPSkeleton\Sources\enums\Books;

$hp = new HarryPotter();

$hp->add2Basket(Books::ONE, 2);
$hp->add2Basket(Books::TWO, 1);
$hp->add2Basket(Books::THREE, 1);
// $hp->add2Basket(Books::FOUR, 1);
// $hp->add2Basket(Books::FIVE, 1);

$basket = $hp->getBasket();
print_r($basket);

print $hp->calculateDiscount();
