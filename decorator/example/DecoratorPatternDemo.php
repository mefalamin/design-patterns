<?php 

require_once 'RedShapeDecorator.php';
require_once 'Circle.php';
require_once 'Rectangle.php';

$circle = new Circle();

$circle->draw();

$circle_red_border = new RedShapeDecorator( $circle );
$circle_red_border->redShapeDecorate();

$rectangle = new Rectangle();
$rectangle->draw();


$rectangle_red_border = new RedShapeDecorator( $rectangle );
$rectangle_red_border->redShapeDecorate();

?>