<?php declare(strict_types=1);

namespace PHPSkeleton\App;

use PHPSkeleton\Sources\enums\Books;

class HarryPotter {

    private array $basket = [];

    private int $price = 8;

    private array $discount = [1, 0.95, 0.9, 0.8, 0.75];

    /**
     * This function does most of the magic:
     * 
     * - Depending on the amount of books, we create a sub-array for each book 
     *   so we have NO duplicates in a set.
     * - Then, for every added book, we check whether it's in a set already or not. 
     * - Finally we sort the basket so the smallest set is at the top. By doing this 
     *   we evenly distribute the sets, so the user gets the best possible discount.
     */
    public function add2Basket(Books $book, int $amount): void
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
        usort($this->basket, function ($a, $b) {
            return sizeof($a) - sizeof($b);
        });
    }

    public function getBasket(): array
    {
        return $this->basket;
    }

    public function calculateDiscount()
    {
        $setPrice = [];
        foreach ($this->basket as $set) {
            $offer = sizeof($set) * $this->price * $this->discount[sizeof($set) - 1];
            array_push($setPrice, $offer);
        }
        return array_sum($setPrice);
    }
}
