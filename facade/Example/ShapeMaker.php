<?php 

require_once 'ShapeInterface.php';
require_once 'Circle.php';
require_once 'Rectangle.php';
require_once 'Square.php';

class ShapeMaker{

    private ShapeInterface $circle;
    private ShapeInterface $rectangle;
    private ShapeInterface $square;


    public function __construct()
    {
        $this->circle = new Circle(); 
        $this->square = new Square(); 
        $this->rectangle = new Rectangle(); 
    }

    public function drawCircle()
    {
        $this->circle->draw();
    }

    public function drawRectangle()
    {
        $this->rectangle->draw();
    }

    public function drawSquare()
    {
        $this->square->draw();
    }



}



?>