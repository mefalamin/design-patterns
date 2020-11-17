<?php 

require_once 'ShapeDecorator.php';


class RedShapeDecorator extends ShapeDecorator{

    public function __construct( $shape )
    {
        parent::__construct( $shape );    
    }


    public function redShapeDecorate()
    {
        $this->setRedBorder();
        $this->shape->draw();
    }
    
    public function setRedBorder()
    {
        echo 'Red Shape Border Decorated and calling | ' . ' ';
    }

}



?>