<?php

require_once 'vendor/autoload.php';

use Footwear\Shoes;
use Footwear\Slippers;

echo '-Shoes Villomi' . "<br>\n";
$villomi = new Shoes();
$villomi
    ->setName('Villomi')
    ->setSize('43')
    ->setMaterial('шкіра крокодила')
    ->setSeason('літо')
    ->setShoelace('-');
echo $villomi->printScreen() . "<br>\n";

echo '-Shoes Patriot' . "<br>\n";
$patriot = new Shoes();
$patriot
    ->setName('Патріот')
    ->setSize('44')
    ->setMaterial('шкіра натуральна')
    ->setSeason('весна/осінь')
    ->setShoelace('+');
echo $patriot->printScreen() . "<br>\n";

echo '-Slippers Slippers' . "<br>\n";
$slippers = new Slippers();
$slippers
    ->setName('Тапки Monkey')
    ->setSize('38')
    ->setMaterial('махрові')
    ->setType('закриті');
echo $slippers->printScreen() . "<br>\n";
