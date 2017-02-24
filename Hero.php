<?php
class Hero
{


    protected $nom;
    protected static $classes = ['Magicien', 'Barbare', 'Paladin'];
    protected $classe ;
    protected $pdv = 5;
    protected $defense = 5;
    protected $attaque = 5;
    protected $pm = 5;
    protected $gold = 100;
    protected $vitesse = 5;


    function __construct($nom, $classe)
    {
        $this->nom = $nom;
        $this->classe = $classe;

    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getClasse()
    {
        return $this->classe;
    }

    public function showClasse()
    {
        echo $this->classe;
    }

    /**
     * @param mixed $classe
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;
    }
    /**
     * @return mixed
     */
    public function getPdv()
    {
        return $this->pdv;
    }

    /**
     * @param mixed $pdv
     */
    public function setPdv($pdv)
    {
        $this->pdv = $pdv;
    }

    /**
     * @return mixed
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * @param mixed $defense
     */
    public function setDefense($defense)
    {
        $this->defense = $defense;
    }

    /**
     * @return mixed
     */
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * @param mixed $attaque
     */
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;
    }

    /**
     * @return mixed
     */
    public function getPm()
    {
        return $this->pm;
    }

    /**
     * @param mixed $pm
     */
    public function setPm($pm)
    {
        $this->pm = $pm;
    }

    /**
     * @return int
     */
    public function getGold()
    {
        return $this->gold;
    }

    /**
     * @param int $gold
     */
    public function setGold($gold)
    {
        $this->gold = $gold;
    }
    /**
     * @return int
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * @param int $vitesse
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;
    }

    public function Degats () {
        $this->pdv = $this->pdv - 1;
        echo $this->nom ." le ".$this->classe." a pedu 1 hp , et ses pdv passent a ".$this->pdv;
    }

}




