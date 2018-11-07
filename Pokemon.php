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

    public function __construct($nm, $healthp, $hitp, $et)
    {
        $this->Name = $nm;
        $this->EnergyType = $et;
        $this->Health = $healthp;
        $this->Hitpoints = $hitp;
        $this->Attack = [];
    }

    function DoAttack($pokemon, $pokemon2, $target)
    {
        echo $this->Name. ' Will attack ' . $target->Name . ' Using ' . $this->Attack[0]->Name;
        echo '<br>';
        if ($pokemon->EnergyType == $pokemon2->Weakness->EnergyType) {
            $pok2nh = $pokemon2->Health - ($pokemon->Attack[0]->AttackPoints * $pokemon2->Weakness->Multiplier);
        } else {
            $pok2nh = $pokemon2->Health - $pokemon->Attack[0]->AttackPoints;
        }

        if ($pok2nh < 1) {
            echo $pokemon2->Name . " Has Died ";
        } else {
            echo $pokemon2->Name . " Now Has " . $pok2nh . " HP Left";
        }
    }

    function DoAttack2($pokemon2, $pokemon, $target)
    {
        echo $this->Name. ' Will attack ' . $target->Name . ' Using ' . $this->Attack[1]->Name;
        echo '<br>';
        if ($pokemon2->EnergyType == $pokemon->Weakness->EnergyType) {
            $poknh = $pokemon->Health - ($pokemon2->Attack[1]->AttackPoints * $pokemon->Weakness->Multiplier);
        } else {
            $poknh = $pokemon->Health - $pokemon2->Attack[1]->AttackPoints;
        }

        if ($poknh < 1) {
            echo $pokemon->Name . " Has Died ";
        } else {
            echo $pokemon->Name . " Now Has " . $poknh . " HP Left";
        }
    }
}




