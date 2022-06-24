<?php
namespace DesignPatterns\Proxy;

class SecuredDoor
{
    protected Door $door;

    public function __construct(Door $door)
    {
        $this->door = $door;
    }

    public function open(string $password)
    {
        if ( !$this->authenticate($password)) {
            echo 'sorry not possible' . PHP_EOL;
            return;
        }
        $this->door->open();
    }

    public function close()
    {
        $this->door->close();
    }

    private function authenticate(string $password): bool
    {
        return $password === '$ecr@t';
    }
}