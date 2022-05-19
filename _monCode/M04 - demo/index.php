<?php include "traitement.php" ?>
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
                <h1>Formulaire</h1>
            </div>
        </div>
        <?php  $villes = ["Rennes","Brest","Nantes","Quimper","Paris"];  ?>
        <div class="row mt-5">
            <div class="col-6 offset-3">
                <?php if(!empty($erreur)): ?>
                    <div class="alert alert-danger" role="alert">
                        <?=$erreur?>
                    </div>
                <?php endif ?>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ville</label>
                        <select type="text" class="form-select" name="ville" >
                            <?php foreach($villes as $ville):  ?>
                                <option> <?= $ville?> </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <input type="password" class="form-control" name="pwd" id="exampleFormControlInput2">
                    </div>
                    <button type="submit" class="btn btn-secondary" name="cnx">Connection</button>
                </form>
            </div>

        </div>
    </div>


</body>
</html>