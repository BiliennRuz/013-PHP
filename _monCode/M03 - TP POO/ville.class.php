<?php
class ville {

    private $nom;
    private $departement;

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Set the value of departement
     *
     * @return  self
     */ 
    public function setDepartement($departement)
    {
        $this->departement = $departement;

        return $this;
    }

    public function __toString()
    {
        echo "la ville {$this->nom} est dans le département {$this->departement}";
        //echo "Je suis Vendeur mon nom est {$this->getNom()}";
    }

}