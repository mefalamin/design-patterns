<?php

use DesignPatterns\Factory\PizzaStore;

require '../../vendor/autoload.php';

$store = new PizzaStore();

$store->orderPizza('cheese');
