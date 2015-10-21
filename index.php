<?php

require_once 'vendor/autoload.php';

use Footwear\Shoes;
use Footwear\Slippers;

$shoes = new Shoes();
$shoes->setName('Туфлі');
$shoes->setModel('Мокасини');
$shoes->setSize('43');
$shoes->setMaterial('Шкіра крокодила');

echo $shoes->__printScreen()."<br>\n";

$slippers = new Slippers();
$slippers->setName('Тапки');
$slippers->setModel('тапки пухнасті 42');
$slippers->setSize('45');
$slippers->setMaterial('сукно');
echo $slippers->__printScreen()."<br>\n";