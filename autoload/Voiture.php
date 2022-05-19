<?php 

class Voiture{

    private $marque;

    public function __construct($marque)
    {
        $this->marque = $marque;
    }


    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }
}