<?php
session_start();

if(isset($_POST["op"])&&isset($_POST["op1"])&&isset($_POST["op2"])){
    
    $result=0;

    if($_POST['op'] == '+') {
        $result = $_POST['op1'] + $_POST['op2'];
    }
    if($_POST['op'] == '*') {
        $result = $_POST['op1'] * $_POST['op2'];
    }

}




?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple session</title>
</head>
<body>
    <body>
        <h1>Calculatrice</h1>
        <form action="" method="POST">
            <div>
                <label for="op1">Opérande 1</label>
                <input type="number" name="op1">
            </div>
            <div>
                <label for="op1">Opérateur</label>
                <select name="op" id="">
                    <option value="*">*</option>
                    <option value="+">+</option>
                </select>
            </div>
            <div>
                <label for="op2">Opérande 2</label>
                <input type="number" name="op2">
            </div>
            <div>
                <button type="submit">Calculer</button>
            </div>
        </form>
    </body>
    </html>

<?php
