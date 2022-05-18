<?php 
    // verif email
    function checkEmail(&$email){
        $email = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            throw new Exception("Email non valide");
        }
    }

    if(isset($_POST["submit"]) && isset($_POST["email"]) ){
        $email = $_POST["email"];
        try {
            checkEmail($email);
            //traitement
            var_dump($email);
        } catch (Exception $e) {
            // message d'erreur
            $erreur = $e->getMessage();
        }
    }

    // if(isset($_POST["submit"])){
    //     $email = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
    //     if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    //         var_dump($_POST["email"]);
    //     }
    // }
