<?php


namespace DesignPatterns\Factory\FactoryMethod;


class NYCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "NY Deep Dish Cheese Pizza";
		$this->dough = "Extra Thick Crust Dough";
		$this->sauce = "Plum Tomato Sauce";

		$this->toppings [] = "Shredded Mozzarella Cheese";
    }
}