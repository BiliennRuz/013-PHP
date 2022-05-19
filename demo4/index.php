<?php 

    require_once "autoload.php";



        /**
         *      => ?page=blog => /blog
         *      => ?page=contact =>    /contact 
         * 
         */
         // route 'blog' =>App\Controller\BlogController
         // route 'contact' =>App\Controller\ContactController
         // route 'home' =>App\Controller\HomeController
    $cata = array(
        "home"=>"App\Controller\HomeController",
        "contact" => "App\Controller\ContactController",
        "blog"=> "App\Controller\BlogController",
        "inscription"=>"App\Controller\InscriptionController",
    );

    if(isset($_GET["page"])){ // la page a ouvrir c'est $page
            $page = $_GET["page"]; 
            $instance = new $cata[$page]();// ContactController, BlogController ...
            $instance->doGet();
    }