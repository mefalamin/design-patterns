<?php

namespace DesignPatterns\Facade\Example;


class Square implements ShapeInterface
{
    public function draw()
    {
        echo 'Square::draw' . "\r\n";
    }
}



?>