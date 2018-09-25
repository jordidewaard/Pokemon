<?php

require 'Pokemon.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';

$pokemon = new Pokemon("Charmeleon", 100, "Fire");
$pokemon->Weakness = new Weakness("Water", 2);
$pokemon->Resistance = new Resistance("Lightning", 20);
$pokemon->Attack[] = new Attack("Flamethrower", 50);


?>