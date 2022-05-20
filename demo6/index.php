<?php 
    require_once "app/ConnectionProvider.php";
    require_once "controller/IndexController.php";
    $articles = IndexController::index();    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row text-center mt-5">
            <h1>Articles</h1>
        </div>

        <div class="row mt-5">
            <div class="col-6 offset-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($articles as $key => $value): ?>
                            <tr>
                                <td><?=$value["id"]?></td>
                                <td><?=$value["titre"]?></td>
                                <td><?=$value["description"]?></td>
                                <td><?=$value["prix"]?></td>
                            </tr>
                        <?php endforeach; ?>
                    
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
