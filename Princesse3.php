<?php
require_once("Personnage3.php");
require_once("Monstres3.php");
require_once("Hero3.php");
class Princesse3 extends Hero3 {
      
      public function __construct()    {
        parent::__construct();
        $this->setEndurance(120);         
     }
      public function gifle(Monstres3 $m){
        $m->setSante($m->getSante()-10);
     } 
      public function coupspecial(Monstres3 $m){
        $m->setSante($m->getSante()-12);
     }
 
}
?>