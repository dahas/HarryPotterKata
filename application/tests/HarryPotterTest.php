<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPSkeleton\App\HarryPotter;
use PHPSkeleton\Sources\enums\Books;

class HarryPotterTest extends TestCase {
    private $hp;

    protected function setUp(): void
    {
        $this->hp = new HarryPotter();
    }

    protected function tearDown(): void
    {
        $this->hp = NULL;
    }

    public function testA()
    {
        $this->hp->add2Basket(Books::ONE, 1);
        $this->assertEquals(8, $this->hp->calculateDiscount());
    }

    public function testB()
    {
        $this->hp->add2Basket(Books::ONE, 1);
        $this->hp->add2Basket(Books::TWO, 1);
        $this->assertEquals(15.20, $this->hp->calculateDiscount());
    }

    public function testC()
    {
        $this->hp->add2Basket(Books::ONE, 1);
        $this->hp->add2Basket(Books::TWO, 1);
        $this->hp->add2Basket(Books::THREE, 1);
        $this->assertEquals(21.60, $this->hp->calculateDiscount());
    }

    public function testD()
    {
        $this->hp->add2Basket(Books::ONE, 1);
        $this->hp->add2Basket(Books::TWO, 1);
        $this->hp->add2Basket(Books::THREE, 1);
        $this->hp->add2Basket(Books::FOUR, 1);
        $this->assertEquals(25.60, $this->hp->calculateDiscount());
    }

    public function testE()
    {
        $this->hp->add2Basket(Books::ONE, 1);
        $this->hp->add2Basket(Books::TWO, 1);
        $this->hp->add2Basket(Books::THREE, 1);
        $this->hp->add2Basket(Books::FOUR, 1);
        $this->hp->add2Basket(Books::FIVE, 1);
        $this->assertEquals(30.00, $this->hp->calculateDiscount());
    }

    public function testF()
    {
        $this->hp->add2Basket(Books::ONE, 2);
        $this->assertEquals(16.00, $this->hp->calculateDiscount());
    }

    public function testG()
    {
        $this->hp->add2Basket(Books::ONE, 2);
        $this->hp->add2Basket(Books::TWO, 1);
        $this->assertEquals(23.20, $this->hp->calculateDiscount());
    }

    public function testH()
    {
        $this->hp->add2Basket(Books::ONE, 2);
        $this->hp->add2Basket(Books::TWO, 1);
        $this->hp->add2Basket(Books::THREE, 1);
        $this->assertEquals(29.60, $this->hp->calculateDiscount());
    }

    public function testJ()
    {
        $this->hp->add2Basket(Books::ONE, 2);
        $this->hp->add2Basket(Books::TWO, 2);
        $this->hp->add2Basket(Books::THREE, 2);
        $this->hp->add2Basket(Books::FOUR, 1);
        $this->hp->add2Basket(Books::FIVE, 1);
        $this->assertEquals(51.20, $this->hp->calculateDiscount());
    }

    public function testK()
    {
        $this->hp->add2Basket(Books::ONE, 5);
        $this->hp->add2Basket(Books::TWO, 5);
        $this->hp->add2Basket(Books::THREE, 4);
        $this->hp->add2Basket(Books::FOUR, 5);
        $this->hp->add2Basket(Books::FIVE, 4);
        $this->assertEquals(141.20, $this->hp->calculateDiscount());
    }
}