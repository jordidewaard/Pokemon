<?php
class Pokemon
{
    public $EnergyType;
    public $Name;
    public $Hitpoints;
    public $Health;
    public $Attack;
    public $Weakness;
    public $Resistance;

    public function __construct($nm, $healthp, $hitp, $et) {
        $this->Name = $nm;
        $this->EnergyType = $et;
        $this->Health = $healthp;
        $this->Hitpoints = $hitp;
        $this->Attack = [];
    }

    function DoAttack($pokemon, $pokemon2, $target) {
        echo $this->Name. ' Will attack ' . $target->Name . ' Using ' . $this->Attack[0]->Name;
        echo '<br>';
        if ($pokemon->EnergyType == $pokemon2->Weakness->EnergyType) {
            $pok2nh = $pokemon2->Health - ($pokemon->Attack[0]->AttackPoints * $pokemon2->Weakness->Multiplier);
            echo $pokemon2->Name . " Now Has " . $pok2nh . " HP Left";
        }
        else {
            $pok2nh = $pokemon2->Health - $pokemon->Attack[0]->AttackPoints;
            echo $pokemon2->Name . " Now Has " . $pok2nh . " HP Left";
        }
    }

    function DoAttack2($pokemon2, $pokemon, $target) {
        echo $this->Name. ' Will attack ' . $target->Name . ' Using ' . $this->Attack[1]->Name;
        echo '<br>';
        if ($pokemon2->EnergyType == $pokemon->Weakness->EnergyType) {
            $poknh = $pokemon->Health - ($pokemon2->Attack[1]->AttackPoints * $pokemon->Weakness->Multiplier);
            echo $pokemon->Name . " Now Has " . $poknh . " HP Left";
        }
        else {
            $poknh = $pokemon->Health - $pokemon2->Attack[1]->AttackPoints;
            echo $pokemon->Name . " Now Has " . $poknh . " HP Left";
        }
    }





}




