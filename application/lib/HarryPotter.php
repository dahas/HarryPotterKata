<?php declare(strict_types=1);

namespace PHPSkeleton\Library;

use PHPSkeleton\Sources\enums\Book;

class HarryPotter {

    private array $basket = [];
    private int $price = 8;
    private array $discount = [1, 0.95, 0.9, 0.8, 0.75];

    public function add2Basket(Book $book, int $amount): void
    {
        for ($x = 0; $x < $amount; $x++) {
            if (isset($this->basket[$x])) {
                if (!in_array($book, $this->basket[$x])) {
                    $this->basket[$x][] = $book;
                }
            } else {
                $this->basket[][] = $book;
            }
        }
    }

    public function getBasket(): array
    {
        return $this->basket;
    }

    public function calculateDiscount(): int|float
    {
        $setPrice = [];
        foreach ($this->basket as $set) {
            $offer = sizeof($set) * $this->price * $this->discount[sizeof($set) - 1];
            array_push($setPrice, $offer);
        }
        return array_sum($setPrice);
    }
}
