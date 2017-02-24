<?php
require_once ('Monstre.php');
/**
 * Created by PhpStorm.
 * User: Vali
 * Date: 22/02/2017
 * Time: 16:57
 */
class Dragon extends Monstre
{
    public function __construct($nom)
    {
        parent::__construct($nom, self::$types[2]);
        $this->pdv = 5;
        $this->defense = 5;
        $this->attaque = 5;
        $this->vitesse = 5;
    }


    public function showName()
    {
        echo $this->nom;
    }
}