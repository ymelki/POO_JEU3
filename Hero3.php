<?php
require_once("Monstres3.php");

abstract class Hero3 extends Personnage3 {
    // private $epee;
    // private $intelligence;
     private $epee; 
     private $intelligence; 

     public function __construct(){
        $this->setEpee(10);
        $this->setInteligence(10); 
    }

     abstract public function gifle(Monstres3 $m); 
     abstract public function coupspecial(Monstres3 $m); 
 
     // public function setSante($sante);
     // public function getSante();

     /**
      * Get the value of epee
      */ 
     public function getEpee()
     {
          return $this->epee;
     }

     /**
      * Set the value of epee
      *
      * @return  self
      */ 
     public function setEpee($epee)
     {
          $this->epee = $epee;

          return $this;
     }

     /**
      * Get the value of intelligence
      */ 
     public function getIntelligence()
     {
          return $this->intelligence;
     }

     /**
      * Set the value of intelligence
      *
      * @return  self
      */ 
     public function setIntelligence($intelligence)
     {
          $this->intelligence = $intelligence;

          return $this;
     }
 }


?>