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

    function DoAttack($target) {
        echo $this->Name. ' Will attack ' . $target->Name . ' Using ' . $this->Attack[0]->Name;
    }


}




