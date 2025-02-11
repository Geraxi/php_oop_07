<?php

require('laser.php');
require('repulsor.php');
require('flight.php');
require('shield.php');

class IronmanArmor {
    public $attack;
    public $defense;
    public static $counter = 0;

  
    public function __construct(Attack $attacco, Defense $difesa) {
        $this->attack = $attacco;  
        $this->defense = $difesa;   
        self::$counter++;
    }

    public function ironmanAttack() {
        $this->attack->attack();
    }
    public function ironmanDefense() {
        $this->defense->defend();
    }
}  


$ironman = new IronmanArmor(new Laser(),new EnergyShield());  
$ironman->ironmanAttack();
$ironman->ironmanDefense();
echo IronmanArmor::$counter . "\n"; 

$ironman2 = new IronmanArmor(new Repulsor(), new Flight());
echo IronmanArmor::$counter . "\n";
