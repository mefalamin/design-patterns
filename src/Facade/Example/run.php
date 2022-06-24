<?php

use DesignPatterns\Facade\Example\ShapeMaker;

require_once '../../../vendor/autoload.php';


$shapMaker = new ShapeMaker();

$shapMaker->drawCircle();
$shapMaker->drawRectangle();
$shapMaker->drawSquare();


