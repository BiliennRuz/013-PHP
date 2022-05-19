<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <?php

        require_once "autoload.php";
        $form = new Form2("","post","Inscription");
        $form->setText("Prénom","prenom") 
             ->setText("Nom","nom")
             ->setText("Email","email","email")
             ->setText("Mot de passe","password","password")
             ->setText("Age","age","number")
             ->setRadioButton("Féminin","f","genre")
             ->setRadioButton("Masculin","m","genre")
             ->setSubmit("Ajouter");
        echo $form->getForm();

    ?>
</body>
</html>