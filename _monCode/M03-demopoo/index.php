<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <?php
        require_once 'client.class.php';
        $steve = new Client("Steve","Lucas",33,"Quimper","0654879865");    
        $pierre = new Client("Pierre","Maisel",33,"Brest","321321321"); 
        //$steve->setPrenom("Sarah")->setNom("De lor")->setAge(12);       
    ?>
    <h3> Nom: <?= $steve->getNom()  ?> </h3>
    <h3> Prénom: <?= $steve->getPrenom()  ?> </h3>
    <h3> Age: <?= $steve->getAge()  ?> </h3>
    <h3> Adresse: <?= $steve->getAdresse()  ?> </h3>
    <h3> Tel: <?= $steve->getTel()  ?> </h3>

    <?php
        var_dump(Client::getCompteur());
    ?>
</body>
</html>