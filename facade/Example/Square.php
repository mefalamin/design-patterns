<?php 

require_once  'ShapeInterface.php';

class Square implements ShapeInterface
{
    public function draw()
    {
        echo 'Square::draw' . "\r\n";
    }
}



?>