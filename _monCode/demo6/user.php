<?php 
    require_once "app/ConnectionProvider.php";
    $db = ConnectionProvider::getConnection(); // obtenir la connexion

    $sqlSelect = "select * from utilisateur"; // requette SQL
    $stmt = $db->query($sqlSelect); // Traitement de la requette 
    $utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC); // recup de données

    $sqlInsert = 'INSERT INTO articles(
                            nom,
                            prenom,
                            email,
                            password,
                            datedenaissance,
                            dateincription,
                            username)
                 VALUES(
                        ' . $nom . ', \'
                        ' . $prenom . ', \'
                        ' . $email . ', \'
                        ' . $password . ', \'
                        ' . $datedenaissance . ', \'
                        ' . $dateincription . ', \'
                        ' . $username . ');';
    $stmt2 = $db->exec($sqlInsert); // Traitement de la requette 

// $query = 'INSERT INTO articles(identifiant, libelle, prix) VALUES(' . $id . ', \'' . $libelle . '\', ' . $prix . ');';
// rowcount = $pdo->exec($query);
// echo "Nombre de lignes insérées : " . $rowcount . '<br>'; 

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
            <h1>Utilisateurs</h1>
        </div>

    <?php 
    require_once "autoload.php";
        $form = new Form("","post","Inscription");
        $form
            ->setText("Nom","nom")
            ->setText("Prénom","prenom") 
            ->setText("Email","email","email")
            ->setText("Mot de passe","password","password")
            ->setText("Date de Naissance","datedenaissance","date")
            ->setText("Date d'inscription","dateincription","date")
            ->setText("Pseudo","username") 
            ->setSubmit("Ajouter");
        echo $form->getForm();
    ?>

        <div class="row mt-5">
            <div class="col-6 offset-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>date de Naissance</th>
                            <th>Date d'inscription</th>
                            <th>Pseudo</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($utilisateurs as $key => $value): ?>
                            <tr>
                                <td><?=$value["id"]?></td>
                                <td><?=$value["nom"]?></td>
                                <td><?=$value["prenom"]?></td>
                                <td><?=$value["email"]?></td>
                                <td><?=$value["password"]?></td>
                                <td><?=$value["datedenaissance"]?></td>
                                <td><?=$value["dateincription"]?></td>
                                <td><?=$value["username"]?></td>
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
