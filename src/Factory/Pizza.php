<?php
namespace DesignPatterns\Factory;

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
        echo "making ". self::getName()  . PHP_EOL;
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


}