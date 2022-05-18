<?php 
    
    require_once "personne.class.php";

    class Client extends Personne{
        
        private $adresse;
        private $tel;
        private static $compteur = 0;

        public function __construct($prenom,$nom,$age,$adresse,$tel)
        {
            static::$compteur++;
            parent::__construct($prenom,$nom,$age);
            $this->adresse = $adresse;
            $this->tel = $tel;
        }
        
        public function parler(){
            echo "Je suis Client mon nom est {$this->getNom()}";
        }

        /**
         * Get the value of adresse
         */ 
        public function getAdresse()
        {
                return $this->adresse;
        }

        /**
         * Set the value of adresse
         *
         * @return  self
         */ 
        public function setAdresse($adresse)
        {
                $this->adresse = $adresse;

                return $this;
        }

        /**
         * Get the value of tel
         */ 
        public function getTel()
        {
                return $this->tel;
        }

        /**
         * Set the value of tel
         *
         * @return  self
         */ 
        public function setTel($tel)
        {
                $this->tel = $tel;

                return $this;
        }

        /**
         * Get the value of compteur
         */ 
        public static function getCompteur()
        {
                return static::$compteur;
        }


    }
