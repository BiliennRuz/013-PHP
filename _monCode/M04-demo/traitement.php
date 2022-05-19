<?php
// traitement

if(isset($_POST["email"])){
    //var_dump($_POST);
    if(isset($_POST['email']) && !empty($_POST['email'])) {
        echo "Email : {$_POST['email']}";
        echo "<br>";
    } else {
        $erreur = "Le champs Email ne peut être vide !";
    }
    if(isset($_POST['email']) && !empty($_POST['ville'])) {
        echo "Ville : {$_POST['ville']}";
        echo "<br>";
    } else {
        $erreur = "Le champs Ville ne peut être vide !";
    }
    if(isset($_POST['pwd']) && !empty($_POST['pwd'])) {
        echo "Password : {$_POST['pwd']}";
        echo "<br>";
    } else {
        $erreur = "Le champs Password ne peut être vide !";
    }
}

?>