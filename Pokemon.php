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
        echo $this->Name . ' Will attack ' . $target->Name . ' Using ' . $this->Attack[0]->Name;
        echo '<br>';
        if ($pokemon->EnergyType == $pokemon2->Weakness->EnergyType) {
            $pokemon2->Health = $pokemon2->Health - ($pokemon->Attack[0]->AttackPoints * $pokemon2->Weakness->Multiplier);
        } else {
            $pokemon2->Health = $pokemon2->Health - $pokemon->Attack[0]->AttackPoints;
        }

        if ($pokemon2->Health < 1) {
            echo $pokemon2->Name . " Has Died ";
        } else {
            echo $pokemon2->Name . " Now Has " . $pokemon2->Health . " HP Left";
        }
    }
}




