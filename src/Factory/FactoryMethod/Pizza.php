<?php
namespace DesignPatterns\Factory\FactoryMethod;

use ReflectionClass;

abstract class Pizza
{
    protected string $name;
    protected string $dough;
    protected string $sauce;
    protected array $toppings = [];

    public function getName(): string
    {
        return  (new ReflectionClass($this))->getShortName();
    }

    public function prepare()
    {
        echo "preparing ". self::getName()  . PHP_EOL;
    }

    public function bake()
    {
        echo "baking ". self::getName()  . PHP_EOL;
    }

    public function cut()
    {
        echo "cutting ". self::getName()  . PHP_EOL;
    }

    public function box()
    {
        echo "boxing ". self::getName()  . PHP_EOL;
    }

    public function __toString(): string
    {
       $details = '';
       $details .= 'dough: ' . $this->dough . PHP_EOL;
       $details .= 'sauce: ' . $this->sauce . PHP_EOL;
       $details .= '---------Toppings----------' . PHP_EOL;
        foreach ($this->toppings as $topping) {
            $details .= $topping . PHP_EOL;
       }

        $details .= '--------- deliverying-' . self::getName() . '-------------' . PHP_EOL;
       return $details;
    }


}