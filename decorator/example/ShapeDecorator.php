<?php 

require_once 'ShapeInterface.php';

abstract class ShapeDecorator implements ShapeInterface{

    protected $shape;

    public function __construct( $shape )
    {
        $this->shape = $shape;
    }


    public function draw()
    {
        $this->shape->draw();
    }

}


?>