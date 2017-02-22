<?php

require_once ('Monstre.php');

/**
 * Created by PhpStorm.
 * User: Vali
 * Date: 22/02/2017
 * Time: 16:56
 */
class Gobelin extends Monstre
{
 public function __construct($nom)
 {
     parent::__construct($nom, self::$types[0]);
     $this->pdv = 5;
     $this->defense = 5;
     $this->attaque = 5;
     $this->vitesse = 5;
 }
}