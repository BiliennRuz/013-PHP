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
        require_once 'model/client.class.php';
        require_once 'controller/client.controller.php';
        require_once 'model/vendeur.class.php';

        use App\Model\Client as c1;
        use App\Controller\Client as c2;
        use App\Model\Vendeur;

        $steve = new c1("Steve","Lucas",33,"Quimper","0654879865");    
        $pierre = new Vendeur("Pierre","Maisel",33,2200); 
        //$steve->setPrenom("Sarah")->setNom("De lor")->setAge(12);       
    ?>
    <h3> Nom: <?= $steve->getNom()  ?> </h3>
    <h3> Prénom: <?= $steve->getPrenom()  ?> </h3>
    <h3> Age: <?= $steve->getAge()  ?> </h3>
    <h3> Adresse: <?= $steve->getAdresse()  ?> </h3>
    <h3> Tel: <?= $steve->getTel()  ?> </h3>

    <?php
        $steve->parler();
        $pierre->parler();
    ?>
</body>
</html>