<?php 

    function autoload_class($nom){
        require_once "$nom.php";
    }
    spl_autoload_register("autoload_class");