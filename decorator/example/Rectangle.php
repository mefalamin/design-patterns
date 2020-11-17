<?php 

require_once 'ShapeInterface.php';

class Rectangle implements ShapeInterface{

    public function draw()
    {
        echo 'Rectangle draw method' . "\r\n";
    }
}



?>