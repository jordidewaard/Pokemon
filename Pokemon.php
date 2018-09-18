<?php
class Pokemon {
    public static $Counter = 0;
    public $Id; //
    public $EnergyType;
    public $Name;
    public $Health;
    public $Attack;
    public $Weakness;
    public $Resistance;
    public function __construct($nm, $hp, $et) {
        self::$Counter = self::$Counter + 1;
        $this->Id = self::$Counter;
        $this->Name = $nm;
        $this->EnergyType = $et;
        $this->Health = $hp;
        $this->Attack = [];
    }
}