<?php
namespace DesignPatterns\Proxy;

class LabDoor implements Door
{

    public function open()
    {
        echo 'door opened' . PHP_EOL;
    }

    public function close()
    {
        echo 'door closed' . PHP_EOL;
    }
}