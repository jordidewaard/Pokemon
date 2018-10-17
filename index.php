<?php

require 'Pokemon.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';

$pokemon = new Pokemon("Pikachu", 60, 60, "Lightning");
$pokemon->Weakness = new Weakness("Fighting", 20);
$pokemon->Resistance = new Resistance("Fire", 1.5);
$pokemon->Attack[] = new Attack("Electric Ring", 50);
$pokemon->Attack[] = new Attack("Pika Punch", 20);

echo '<pre>' , var_dump($pokemon) , '</pre>';

$pokemon2 = new Pokemon("Charmeleon", 60, 60, "Fire");
$pokemon2->Weakness = new Weakness("Water", 2);
$pokemon2->Resistance = new Resistance("Fire", 10);
$pokemon2->Attack[] = new Attack("Head Butt", 10);
$pokemon2->Attack[] = new Attack("Flare", 30);

echo '<pre>' , var_dump($pokemon2) , '</pre>';

$pokemon->DoAttack($pokemon2);


?>