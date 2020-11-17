<?php 

require_once 'Circle.php';
require_once 'Rectangle.php';
require_once 'Square.php';

class ShapeFactory{

    protected $shape;

    public function getShape( $shape )
    {
        if( 'circle' == strtolower($shape)){
            return new Circle();
        }
        elseif( 'rectangle' == strtolower($shape)){
            return new Rectangle();
        }
        elseif( 'square' == strtolower($shape)){
            return new Square();
        }
        else{
            return null;
        }
    }

}


?>