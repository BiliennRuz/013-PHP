<?php
    $titre = "Connexion";
    $age = 20;
    $p1 = "Dom";
    $p2 = "Manu";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?></title>
</head>
<body>
    <h1>Demo 1</h1>
    <p>
        <?php
            echo $titre . " Hello world" . ", age : " . $age . " ans" . "<br>" .
            'prénom 1: '. $p1. ', prénom 2: '.$p2;
        ?>
    </p>
</body>
</html>


