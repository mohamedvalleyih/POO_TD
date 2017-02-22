<?php
require_once ('Hero.php');
/**
 * Created by PhpStorm.
 * User: Vali
 * Date: 22/02/2017
 * Time: 16:33
 */
class Magicien extends Hero
{
    public function __construct($nom)
    {
        parent::__construct($nom, self::$classes[0]);

        $this->pdv = 5;
        $this->defense = 5;
        $this->attaque = 5;
        $this->pm = 5;
        $this->gold = 100;
        $this->vitesse = 5;

    }
}