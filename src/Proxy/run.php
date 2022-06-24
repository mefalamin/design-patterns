<?php

use DesignPatterns\Proxy\LabDoor;
use DesignPatterns\Proxy\SecuredDoor;

require_once '../../vendor/autoload.php';

$lab_door = new LabDoor();
$lab_door->open();
$lab_door->close();

$secured_lab = new SecuredDoor(new LabDoor());
$secured_lab->open('pass');
