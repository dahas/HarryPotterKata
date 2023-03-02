<?php

require dirname(__DIR__, 1) . '/application/vendor/autoload.php';

use PHPSkeleton\Sources\Router;
use PHPSkeleton\App\HarryPotter;


$router = new Router();


$router->get("/", function () {
    echo "No Front End available yet! Please use \"debug.php\" to test 
        the calculation in the console of your IDE.";
});


$router->notFound(function () {
    echo "Page Not Found!";
});


$router->run();