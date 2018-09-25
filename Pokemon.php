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

    public function __construct($nm, $hp, $et) {
        $this->Name = $nm;
        $this->EnergyType = $et;
        $this->Health = $hp;
        $this->Attack = [];
    }
}



