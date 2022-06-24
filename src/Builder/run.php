<?php

use DesignPatterns\Builder\BurgerBuilder;

require '../../vendor/autoload.php';


/* @var $burger BurgerBuilder */
$burger = (new BurgerBuilder(10))
            ->addCheese(true)
            ->addLettuce(true)
            ->addPepperoni(false)
            ->addTomato(true)
            ->build();

var_dump($burger);