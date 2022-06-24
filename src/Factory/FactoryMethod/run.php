<?php

use DesignPatterns\Factory\FactoryMethod\ChicagoPizzaStore;
use DesignPatterns\Factory\FactoryMethod\NYPizzaStore;

require_once '../../../vendor/autoload.php';

$newyork_store = new NYPizzaStore();
$chicago_store = new ChicagoPizzaStore();


$newyork_store->orderPizza(NYPizzaStore::NY_CHEESE);
$chicago_store->orderPizza(ChicagoPizzaStore::CHICAGO_PEPPERONI);