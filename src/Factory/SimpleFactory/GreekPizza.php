<?php


namespace DesignPatterns\Factory\SimpleFactory;


class GreekPizza extends  Pizza
{
    public function __construct()
    {
        $this->name = "Greek Pizza";
		$this->dough = "Extra Thick Crust Dough";
		$this->sauce = "Plum Tomato Sauce";

		$this->toppings [] = "Shredded Mozzarella Cheese";
		$this->toppings [] = "Frozen Clams from Chesapeake Bay";
	}

}