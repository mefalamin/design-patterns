<?php


namespace DesignPatterns\Factory\FactoryMethod;


class ChicagoPepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = "Chicago Pepperoni Pizza";
		$this->dough = "Thick Crust Dough";
		$this->sauce = "Chilli Sauce";

		$this->toppings [] = "Grated Reggiano Cheese";
		$this->toppings [] = "Sliced Pepperoni";
		$this->toppings [] = "Garlic";
		$this->toppings [] = "Onion";
		$this->toppings [] = "Mushrooms";
		$this->toppings [] = "Red Pepper";
    }
}