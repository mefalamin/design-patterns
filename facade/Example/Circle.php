<?php 

require_once  'ShapeInterface.php';

class Circle implements ShapeInterface
{
    public function draw()
    {
        echo 'Circle::draw' . "\r\n";
    }
}



?>