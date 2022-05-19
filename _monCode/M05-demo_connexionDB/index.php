<?php

try {
    $hote = "localhost";
    $username = "root";
    $pwd = "";
    $dbname = "papetrie";
    $db = new PDO("mysql:host=$hote;dbname=$dbname",$username,$pwd);
    echo "Connected !";
    var_dump($db->getAttribute((PDO::ATTR_SERVER_VERSION)));

    $sql = "SELECT * FROM article";


    $stmt = $db->query($sql);
    // recupe d'un tableau
    $all = $stmt->fetchall(PDO::FETCH_ASSOC);
    var_dump($all);
    // recup d'une seule valeur
    $one = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($one);

} catch (\Throwable $th) {
    echo "Not Connected !";
}