<?php
class Monstre {
    protected $nom;
    protected static $types=['Gobelin', 'Mage Noir' , 'Dragon'];
    protected $type;
    protected $pdv ;
    protected $defense ;
    protected $attaque ;
    protected $vitesse ;

    function __construct($nom, $type)
    {
        $this->nom = $nom;
        $this->type = $type;

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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
{
    $this->type = $type;
}
    public function showType()
    {
        echo $this->type;
    }

    /**
     * @return int
     */
    public function getPdv()
    {
        return $this->pdv;
    }

    /**
     * @param int $pdv
     */
    public function setPdv($pdv)
    {
        $this->pdv = $pdv;
    }

    /**
     * @return int
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * @param int $defense
     */
    public function setDefense($defense)
    {
        $this->defense = $defense;
    }

    /**
     * @return int
     */
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * @param int $attaque
     */
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;
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
}