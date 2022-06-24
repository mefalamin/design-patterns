<?php

namespace DesignPatterns\Builder;


class BurgerBuilder
{
    public int $size;
    public bool $cheese,$pepperoni, $lettuce, $tomato = false;

    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function addCheese(bool $cheese=false): BurgerBuilder
    {
        $this->cheese = $cheese;
        return $this;
    }

    public function addPepperoni(bool $pepperoni=false): BurgerBuilder
    {
        $this->pepperoni = $pepperoni;
        return $this;
    }

    public function addLettuce(bool $lettuce=false): BurgerBuilder
    {
        $this->lettuce = $lettuce;
        return $this;
    }

    public function addTomato(bool $tomato=false): BurgerBuilder
    {
        $this->tomato = $tomato;
        return $this;
    }

    public function build()
    {
        return new Burger($this);
    }
}