<?php

use DesignPatterns\Singleton\Singleton;

require_once '../../vendor/autoload.php';


$obj = Singleton::getInstance();
$obj->showObjectClass();


