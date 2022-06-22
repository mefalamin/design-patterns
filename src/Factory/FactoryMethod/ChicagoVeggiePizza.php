<?php
namespace DesignPatterns\Factory\FactoryMethod;

class ChicagoVeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = "Chicago Veggie Pizza";
		$this->dough = "Thin Crust Dough";
		$this->sauce = "Marinara Sauce";

		$this->toppings [] = "Grated Reggiano Cheese";
		$this->toppings [] = "Garlic";
		$this->toppings [] = "Red Pepper";
    }
}