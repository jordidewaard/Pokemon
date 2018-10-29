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

$pokemon2 = new Pokemon("Charmeleon", 60, 60, "Fire");
$pokemon2->Weakness = new Weakness("Water", 2);
$pokemon2->Resistance = new Resistance("Fire", 10);
$pokemon2->Attack[] = new Attack("Head Butt", 10);
$pokemon2->Attack[] = new Attack("Flare", 30);

echo $pokemon2->Name . " HP " . $pokemon2->Health . "/" . $pokemon2->Hitpoints;
echo '<br>';
echo $pokemon->Name . " HP " . $pokemon->Health . "/" . $pokemon->Hitpoints;
echo '<br>';
echo '<br>';
$pokemon->DoAttack($pokemon2);
echo '<br>';
$pok2nh = $pokemon2->Health - $pokemon->Attack[0]->AttackPoints;
echo $pokemon2->Name . " Now Has " . $pok2nh . " HP Left";
echo '<br>';
echo '<br>';
$pokemon2->DoAttack($pokemon);
echo '<br>';
$poknh = $pokemon->Health - $pokemon2->Attack[1]->AttackPoints;
echo $pokemon->Name . " Now Has " . $poknh . " HP Left";
?>