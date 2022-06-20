<?php

namespace DesignPatterns\Strategy;

require '../../vendor/autoload.php';

$simulator = new DuckSimulator();

$simulator->run();