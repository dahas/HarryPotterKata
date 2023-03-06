<?php

use PHPSkeleton\Sources\Router;
use PHPSkeleton\App\BookStore;
use PHPSkeleton\Library\HarryPotter;
use PHPSkeleton\Sources\enums\Book;

require dirname(__DIR__, 1) . '/application/vendor/autoload.php';

$router = new Router();

// Render Front End
$router->get("/", function () {
    $store = new BookStore();
    echo $store->render();
});

// Calculate Discount
$router->post("/calculate", function ($data) {
    $hp = new HarryPotter();
    for($i = 1; $i <= 5; $i++) {
        $hp->add2Basket(Book::from($i), intval($data["bd" . $i]));
    }
    echo $hp->calculateDiscount();
});

$router->notFound(function () {
    echo "Page Not Found!";
});

$router->run();