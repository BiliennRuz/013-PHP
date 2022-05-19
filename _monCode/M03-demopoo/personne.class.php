<?php 

    abstract class Personne{

        /**
         * Déclaration d'attributes
         */
        private $prenom;
        private $nom;
        private $age;

        /**
         * Constructeur de la classe Personne
         * @prenom 
         * @nom
         * @age
         * return 
         */
        public function __construct($prenom,$nom,$age)
        {
           $this->prenom = $prenom;
           $this->nom=$nom;
           $this->age=$age; 
        }

        /**
         * Méthode abstraite
         */
        public abstract function parler();

        public function __destruct()
        {
            var_dump($this->prenom);
        }

        /**
         * Get the value of prenom
         */ 
        public function getPrenom()
        {
                return $this->prenom;
        }

        /**
         * Set the value of prenom
         *
         * @return  self
         */ 
        public function setPrenom($prenom)
        {
                $this->prenom = $prenom;

                return $this;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

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
         * Get the value of age
         */ 
        public function getAge()
        {
                return $this->age;
        }

        /**
         * Set the value of age
         *
         * @return  self
         */ 
        public function setAge($age)
        {
                $this->age = $age;

                return $this;
        }
    }