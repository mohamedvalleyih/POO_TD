<?php
require_once ('Monstre.php');

class Mage_noir extends Monstre
{
    public function __construct($nom)
    {
        parent::__construct($nom, self::$types[1]);
        $this->pdv = 5;
        $this->defense = 5;
        $this->attaque = 5;
        $this->vitesse = 5;
    }

}