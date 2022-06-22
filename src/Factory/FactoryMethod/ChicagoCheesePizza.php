<?php


namespace DesignPatterns\Factory\FactoryMethod;


class ChicagoCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "Chicago Deep Dish Cheese Pizza";
		$this->dough = "Extra Thick Crust Dough";
		$this->sauce = "Plum Tomato Sauce";

		$this->toppings [] = "Shredded Mozzarella Cheese";
    }
}