<?php
    require_once "traitement.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculatrice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
  <body>
    <div class="container-fluid">
        <div class="row text-center mt-5">
            <h1>Calculatrice</h1>
        </div>
        <div class="row mt-5">
            <div class="col-6 offset-3">
                <form action="" method="post">
                    <div class="mb-3">
                            <label  class="form-label">Opérande 1</label>
                            <input type="number" class="form-control" name="op1"  placeholder=".ex 5">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Opérateur</label>
                        <select  class="form-select form-select-lg mb-3" name="operateur">
                            <option selected>--- choisir operateur ---</option>
                            <?php foreach ($operateurs as $key => $value): ?>
                                <option value="<?=$key?>" ><?=$value?></option> 
                            <?php endforeach; ?>
                        </select>
                    </div>  
                    <div class="mb-3">
                            <label  class="form-label">Opérande 2</label>
                            <input type="number" class="form-control" name="op2"  placeholder=".ex 20">
                    </div>                    
                    <div class="mb-3 text-center mt-5">
                        <button class="btn btn-primary" type="submit" name="submit" value="ok">Calculer</button>
                    </div>
                </form>
                <div class="row mt-5 result text-center">
                        <h1>
                            <?php 
                                if(isset($result)):
                                    echo $result;
                                endif; 
                            ?>  
                        </h1>
                        <?php  if(isset($erreur)):?>
                            <span class="alert alert-danger" role="alert">
                                <?=$erreur?>
                            </span>
                        <?php endif; ?>
                </div>                
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>