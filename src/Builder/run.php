<?php

use DesignPatterns\Builder\BurgerBuilder;

require_once '../../vendor/autoload.php';


/* @var $burger BurgerBuilder */
$burger = (new BurgerBuilder(10))
            ->addCheese(true)
            ->addLettuce(true)
            ->addPepperoni(false)
            ->addTomato(true)
            ->build();

var_dump($burger);