<?php

require 'application/vendor/autoload.php';

use PHPSkeleton\Library\HarryPotter;
use PHPSkeleton\Sources\enums\Book;

$hp = new HarryPotter();

$eee = Book::tryFrom(4);

$hp->add2Basket(Book::ONE, 5);
$hp->add2Basket(Book::TWO, 5);
$hp->add2Basket(Book::THREE, 4);
$hp->add2Basket(Book::FOUR, 5);
$hp->add2Basket(Book::FIVE, 4);

$basket = $hp->getBasket();
// print_r($basket);

echo "----------------------------------------------\n";
echo "Angebot: " . $hp->calculateDiscount() . "\n";
echo "----------------------------------------------\n";
