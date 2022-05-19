<?php include "calcul.php" ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M03 Formulaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="text-center">
                <h1>Super calculateur</h1>
            </div>
        </div>
        <?php  $operateurs = ["+","-","*","/","%"];  ?>
        <div class="row mt-5">
            <div class="col-6 offset-3">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Opérande 1</label>
                        <input type="text" class="form-control" name="operande1" id="exampleFormControlInput1" placeholder="15">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Opérateur</label>
                        <select type="text" class="form-select" name="operateur" >
                            <?php foreach($operateurs as $operateur):  ?>
                                <option> <?= $operateur?> </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Opérande 2</label>
                        <input type="text" class="form-control" name="operande2" id="exampleFormControlInput2" placeholder="15">
                    </div>
                    <button type="submit" class="btn btn-secondary" name="cnx">Calculer</button>
                </form>
                <br>
                <?php if(!empty($resultat)): ?>
                    <div class="alert alert-success mx-auto" role="alert">
                        <?=$calcul?>
                        <br>
                        <?=$resultat?>
                    </div>
                    <?php endif ?>
                    <?php if(!empty($erreur)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?=$erreur?>
                        </div>
                    <?php endif ?>
            </div>

        </div>
    </div>


</body>
</html>