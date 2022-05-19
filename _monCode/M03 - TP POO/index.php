<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<!--     
    <?php
        // require_once 'ville.class.php';
        // $brest = new Ville();
        // $brest->setNom("Brest");  
        // $brest->setNom("Finistère");    
        // $quimper = new Ville();
        // $quimper->setNom("Quimper");  
        // $quimper->setNom("Finistère");        
    ?>
    <h3> Ville: <?= $brest ?> </h3>
    <br>
    <h3> Ville: <?= $quimper ?> </h3>
     -->

     <h3>Formulaire</h3>
    <?php
        require_once 'form.class.php';
        $textarea = new Form();
        echo "test";
        $textarea->setText("test");  
        $textarea->setSubmit("ok");    
       
    ?>
    <p><?= $textarea->Form::getForm() ?></p>

</body>
</html>