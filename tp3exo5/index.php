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

        require "classe/formulaire.php";
        $form = new Form("","post","Inscription");
        $form->setText("Prénom","prenom");
        $form->setText("Nom","nom");
        $form->setText("Email","email","email");
        $form->setText("Mot de passe","password","password");
        $form->setText("Age","age","number");
        $form->setSubmit("Ajouter");
        echo $form->getForm();

    ?>
</body>
</html>