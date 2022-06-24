<?php

namespace DesignPatterns\Strategy;

require_once '../../vendor/autoload.php';

$simulator = new DuckSimulator();

$simulator->run();