<?php

// traitement
    $erreur="";
    if(isset($_POST["cnx"])){ // submit button
        
        if(isset($_POST['email']) && !empty($_POST['email'])){
            echo "Email: {$_POST['email']} ";
        }else{
            $erreur = "Le champs Email ne peut pas etre vide!";
        }

        if(isset($_POST['ville']) && !empty($_POST['ville'])){
            echo "Ville: {$_POST['ville']}  ";
        }else{
            $erreur = "Le champs Ville ne peut pas etre vide!";
        }
        
        if(isset($_POST['password']) && !empty($_POST['password'])){
            echo "Mot de passe: {$_POST['password']} ";
        }else{
            $erreur = "Le champs Mot de passe ne peut pas etre vide!";
        }        
                        
    }

?>