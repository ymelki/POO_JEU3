<?php
require_once("Personnage3.php");
require_once("Monstres3.php");

class Lutin3 extends Monstres3 {
    private $salete;

    public function __construct()    {
        parent::__construct();
        $this->setSalete(15); 
        $this->setEndurance(100);         
    }
    
     public function rugir(Hero3 $h){
        $h->setSante($h->getSante()-10);

    }
     public function coupdesalete(Hero3 $h){
        $h->setSante($h->getSante()-4);
    }

    /**
     * Get the value of salete
     */ 
    public function getSalete()
    {
        return $this->salete;
    }

    /**
     * Set the value of salete
     *
     * @return  self
     */ 
    public function setSalete($salete)
    {
        $this->salete = $salete;

        return $this;
    }
}
?>