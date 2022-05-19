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

        function autoload_class($nom){// namespace+nom de la classe
            require_once "$nom.php";
        }

        spl_autoload_register("autoload_class");

        //require "classe/formulaire.php";
        $form = new Form("","post","Inscription");

        //require "classe/formulaire2.php";
        $form2 = new Form2("","post","Inscription");
        $form2->setText("Prénom 2","prenom");
        $form2->setText("Nom","nom");
        $form2->setText("Email","email","email");
        $form2->setText("Mot de passe","password","password");
        $form2->setText("Age","age","number");
        $form2->setRadio("Choix 1","choix","radio");
        $form2->setRadio("Choix 2","choix","radio");
        $form2->setCheckbox("NewsLetter","newsletter","checkbox");
        $form2->setSubmit("Ajouter");
        echo $form2->getForm();

    ?>
</body>
</html>