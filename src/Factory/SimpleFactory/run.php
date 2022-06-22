<?php

use DesignPatterns\Factory\SimpleFactory\PizzaStore;
use DesignPatterns\Factory\SimpleFactory\SimplePizzaFactory;

require '../../../vendor/autoload.php';

$simplePizzaFactory = new SimplePizzaFactory();
$store = new PizzaStore($simplePizzaFactory);

$store->orderPizza('cheese');
$store->orderPizza('greek');