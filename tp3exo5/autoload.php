<?php 

    const ROOT = __DIR__; // rep base

    function autoload_class($nom){// namespace+nom de la classe
        require_once ROOT."/classe/$nom.php";
    }
    spl_autoload_register("autoload_class");