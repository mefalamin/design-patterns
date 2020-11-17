<?php 
require_once 'ShapeFactory.php';


$shape_factory = new ShapeFactory();

$shape1 = $shape_factory->getShape( 'Circle' );
$shape1->draw();

$shape2 = $shape_factory->getShape( 'Rectangle' );
$shape2->draw();

$shape3 = $shape_factory->getShape( 'Square' );
$shape3->draw();



?>