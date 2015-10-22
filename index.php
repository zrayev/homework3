<?php

require_once 'vendor/autoload.php';

use Footwear\Shoes;
use Footwear\Slippers;

echo '-Shoes Villomi'."<br>\n";
$villomi = new Shoes();
$villomi->setName('Villomi');
$villomi->setSize('43');
$villomi->setMaterial('шкіра крокодила');
$villomi->setSeason('літо');
$villomi->setShoelace('-');
echo $villomi->printScreen()."<br>\n";

echo '-Shoes Patriot'."<br>\n";
$patriot = new Shoes();
$patriot->setName('Патріот');
$patriot->setSize('44');
$patriot->setMaterial('шкіра натуральна');
$patriot->setSeason('весна/осінь');
$patriot->setShoelace('+');
echo $patriot->printScreen()."<br>\n";

echo '-Slippers Slippers'."<br>\n";
$slippers = new Slippers();
$slippers->setName('Тапки Monkey');
$slippers->setSize('38');
$slippers->setMaterial('махрові');
$slippers->setType('закриті');
echo $slippers->printScreen()."<br>\n";