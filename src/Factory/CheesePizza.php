<?php


namespace DesignPatterns\Factory;


class CheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "Chicago Style Deep Dish Cheese Pizza";
		$this->dough = "Extra Thick Crust Dough";
		$this->sauce = "Plum Tomato Sauce";

		$this->toppings [] = "Shredded Mozzarella Cheese";
    }
}