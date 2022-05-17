<?php
// traitement
if(isset($_POST["email"])){
    echo "Email: {$_POST['email']} ";
    echo "Ville: {$_POST['ville']}  ";
    echo "Mot de passe: {$_POST['password']} ";
}

?>