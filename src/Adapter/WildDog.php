<?php

namespace DesignPatterns\Adapter;


class WildDog implements Bark
{

    public function bark()
    {
        echo 'barking......dog' . PHP_EOL;
    }
}