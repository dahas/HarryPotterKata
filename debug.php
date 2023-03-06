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
echo "Warenkorb: 2 x Bd 1, 2 x Bd 2, 2 x Bd 3, 1 x Bd 4, 1 x Bd 5:\n";
echo "Angebot: " . $hp->calculateDiscount() . "\n";
echo "----------------------------------------------\n";
