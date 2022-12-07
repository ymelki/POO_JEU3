<?php
abstract class Monstres3 extends Personnage3 {
   
    private $mechancete; 
    
    public function __construct(){
        parent::__construct();
        $this->setMechancete(10); 
    }


    abstract public function rugir(Hero3 $h); 
    abstract public function coupdesalete(Hero3 $h); 

    // public function setSante($sante);
    // public function getSante();

    /**
     * Get the value of mechancete
     */ 
    public function getMechancete()
    {
        return $this->mechancete;
    }

    /**
     * Set the value of mechancete
     *
     * @return  self
     */ 
    public function setMechancete($mechancete)
    {
        $this->mechancete = $mechancete;

        return $this;
    }
}
?>