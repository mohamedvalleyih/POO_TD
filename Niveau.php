<?php
require_once ('Paladin.php');
require_once ('Magicien.php');
require_once ('Barbare.php');
class Niveau
{
    private $salle;
    private $coffre;
    private $monstre;
    private $hero;
    private $portes;
    /**
     * @return mixed
     */
    public function getSalle()
    {
        return $this->salle;
    }
    /**
     * @param mixed $salle
     */
    public function setSalle($salle)
    {
        $this->salle = $salle;
    }
    /**
     * @return mixed
     */
    public function getCoffre()
    {
        return $this->coffre;
    }
    /**
     * @param mixed $coffre
     */
    public function setCoffre($coffre)
    {
        $this->coffre = $coffre;
    }
    /**
     * @return mixed
     */
    public function getMonstre()
    {
        return $this->monstre;
    }
    /**
     * @param mixed $monstre
     */
    public function setMonstre($monstre)
    {
        $this->monstre = $monstre;
    }
    /**
     * @return mixed
     */
    public function getHero()
    {
        return $this->hero;
    }
    /**
     * @param mixed $hero
     */
    public function setHero($hero)
    {
        $this->hero = $hero;
    }
    /**
     * @return mixed
     */
    public function getPortes()
    {
        return $this->portes;
    }
    /**
     * @param mixed $portes
     */
    public function setPortes($portes)
    {
        $this->portes = $portes;
    }
}