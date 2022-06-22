<?php

use DesignPatterns\Facade\Example\ShapeMaker;

require '../../../vendor/autoload.php';


$shapMaker = new ShapeMaker();

$shapMaker->drawCircle();
$shapMaker->drawRectangle();
$shapMaker->drawSquare();


?>