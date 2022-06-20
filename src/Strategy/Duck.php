<?php


namespace DesignPatterns\Strategy;


abstract class Duck
{

    protected FlyBehavior $flyBehaviour;
    protected QuakeBehavior $quackBehavior;



    abstract public function display();

    /**
     * @param FlyBehavior $flyBehaviour
     */
    public function setFlyBehaviour(FlyBehavior $flyBehaviour): void
    {
        $this->flyBehaviour = $flyBehaviour;
    }

    /**
     * @param QuakeBehavior $quackBehavior
     */
    public function setQuackBehavior(QuakeBehavior $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function swim(): void
    {
        echo 'swim' . PHP_EOL;
    }

    public function performFly(): void
    {
        $this->flyBehaviour->fly();
    }

    public function performQuack(): void
    {
        $this->quackBehavior->quake();
    }

}