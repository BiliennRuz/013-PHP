<?php 

    class Personne{
        private $name;
        protected $age;
        public $address;

        public function __construct($name,$age,$address)
        {
            $this->name=$name;
            $this->age= $age;
            $this->address= $address;
        }

    }


    $p = new Personne("Gael Maisel",30,"Brest");

    $s = serialize($p);

    var_dump($s);

    $f = unserialize($s);

    var_dump($f);



