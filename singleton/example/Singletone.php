<?php 

class Singletone{

    private static $instance;
    private function __construct(){}

    public static function getInstance()
    {
        if( null === self::$instance){
            self::$instance = new Singletone();
        }
        return self::$instance;
    }

    public function showMessage()
    {
        echo 'Singletone::instance' . "\r\n";
    }
}



?>