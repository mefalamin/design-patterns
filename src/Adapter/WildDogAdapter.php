<?php

namespace DesignPatterns\Adapter;


class WildDogAdapter implements Lion
{
    protected WildDog $wildDog;

    public function __construct(WildDog $wildDog)
    {
        $this->wildDog = $wildDog;
    }

    public function roar()
    {
        $this->wildDog->bark();
    }
}