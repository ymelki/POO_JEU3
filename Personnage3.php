<?php
abstract class Personnage3 {
    private $musuculation;
    private $lachete;
    protected $sante;
    protected $endurance;

    public function __construct(){ 
        $this->setSante(100);
    }

    // LES MONSTRES OGRE ET LUTIN AIENT FORCEMENT LES METHODES
    // COUPSPCIALE(Hero $h)
   


    /**
     * Get the value of musuculation
     */ 
    public function getMusuculation()
    {
        return $this->musuculation;
    }

    /**
     * Set the value of musuculation
     *
     * @return  self
     */ 
    public function setMusuculation($musuculation)
    {
        $this->musuculation = $musuculation;

        return $this;
    }

    /**
     * Get the value of lachete
     */ 
    public function getLachete()
    {
        return $this->lachete;
    }

    /**
     * Set the value of lachete
     *
     * @return  self
     */ 
    public function setLachete($lachete)
    {
        $this->lachete = $lachete;

        return $this;
    }

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
     * Get the value of inteligence
     */ 
    public function getInteligence()
    {
        return $this->inteligence;
    }

    /**
     * Set the value of inteligence
     *
     * @return  self
     */ 
    public function setInteligence($inteligence)
    {
        $this->inteligence = $inteligence;

        return $this;
    }

    /**
     * Get the value of sante
     */ 
    public function getSante()
    {
        return $this->sante;
    }

    /**
     * Set the value of sante
     *
     * @return  self
     */ 
    public function setSante($sante)
    {
        $this->sante = $sante;

        return $this;
    }

    /**
     * Get the value of endurance
     */ 
    public function getEndurance()
    {
        return $this->endurance;
    }

    /**
     * Set the value of endurance
     *
     * @return  self
     */ 
    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;

        return $this;
    }
} 
?>