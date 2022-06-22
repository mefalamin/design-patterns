<?php 

namespace DesignPatterns\Facade\Example;


class Rectangle implements ShapeInterface
{
    public function draw()
    {
        echo 'Rectangle::draw' . "\r\n";
    }
}



?>