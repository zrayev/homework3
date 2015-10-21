<?php

require_once 'vendor/autoload.php';

use Footwear\Shoes;
use Footwear\Slippers;

$shoes = new Shoes();
$shoes->setName('Туфлі');
$shoes->setModel('Мокасини');
$shoes->setSize('43');
echo $shoes->__printScreen()."<br>\n";

$slippers = new Slippers();
$slippers->setName('Тапки');
$slippers->setModel('Тапки пухнасті');
$slippers->setSize('45');
echo $slippers->__printScreen()."<br>\n";