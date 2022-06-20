<?php 

namespace DesignPatterns\Singleton;

class Singleton{

    private static Singleton $instance;
    private function __construct(){}

    public static function getInstance(): Singleton
    {
        if ( empty(self::$instance)) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function showObjectClass()
    {
        echo get_class(self::$instance);
    }
}