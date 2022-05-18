<?php 

    require_once "personne.class.php";

    class Vendeur extends Personne{

        private $ca;

        public function __construct($prenom,$nom,$age,$ca){
            parent::__construct($prenom,$nom,$age);
            $this->ca = $ca;
        }

        public function parler(){
            echo "Je suis Vendeur mon nom est {$this->getNom()}";
        }


        /**
         * Get the value of ca
         */ 
        public function getCa()
        {
                return $this->ca;
        }

        /**
         * Set the value of ca
         *
         * @return  self
         */ 
        public function setCa($ca)
        {
                $this->ca = $ca;

                return $this;
        }
    }