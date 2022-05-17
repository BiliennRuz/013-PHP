<?php include "traitement.php" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>Formulaire</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="text-center">
                    <h1>Formulaire</h1>
                </div>
            </div>
            <div class="row mt-5">
                <?php  $villes = ["Rennes","Brest","Nantes","Quimper","Paris"];  ?>
                <div class="col-6 offset-3">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <select type="text" class="form-select form-select-lg mb-3" name="ville" >
                                <?php foreach($villes as $ville):  ?>
                                    <option> <?= $ville?> </option>
                                <?php endforeach ?>    
                            </select>
                        </div>                        
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleFormControlInput1">
                        </div>   
                        <button class="btn btn-primary" type="submit" name="cnx" value="ok" >Connexion</button>                    
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>