<?php

use DesignPatterns\Adapter\AsianLion;
use DesignPatterns\Adapter\Hunter;
use DesignPatterns\Adapter\WildDog;
use DesignPatterns\Adapter\WildDogAdapter;

require '../../vendor/autoload.php';

$hunter = new Hunter(new AsianLion());
$hunter->hunt();

$hunter = new Hunter(new WildDogAdapter(new WildDog()));
$hunter->hunt();