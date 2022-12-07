<?php
require_once("Personnage3.php");
require_once("Monstres3.php");

class Ogre3 extends Monstres3 {
     public function rugir(Hero3 $h){
        $h->setSante($h->getSante()-5);

    }
     public function coupdesalete(Hero3 $h){
        $h->setSante($h->getSante()-15);
    }
}
?>