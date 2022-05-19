<?php

use App\Model\Vendeur;

    function autoload_class($nom){// namespace+nom de la classe
        require_once "$nom.php";
    }

    spl_autoload_register("autoload_class");

    $v = new Voiture("BMW");
    var_dump($v);

    $c = new Client("Steve");
    var_dump($c);


    $v = new Vendeur("hgkljhg","kjhgkjh",54,5646);
    var_dump($v);
