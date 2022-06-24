<?php 
namespace DesignPatterns\Facade\Example;

class Circle implements ShapeInterface
{
    public function draw()
    {
        echo 'Circle::draw' . "\r\n";
    }
}



