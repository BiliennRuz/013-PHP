<?php 

if (file_exists('test.xml')) {
    $xml = simplexml_load_file('test.xml');
    try{

        $hote=$xml->host;
        $username=$xml->username;
        $pwd = $xml->password;
        $dbname=$xml->dbname;
        $db = new PDO("mysql:host=$hote;dbname=$dbname",$username,$pwd);// Admin
    
/**
 *  Insert new article
 */
        $sql = "INSERT INTO article (titre, description, prix) VALUES (:titre, :desc, :prix)";
        $stmt = $db-> prepare($sql);
        $stmt ->bindValue(":titre", "Samsug s23");
        $stmt ->bindValue(":desc", "téléphone Samsug s23");
        $stmt ->bindValue(":prix", 1200);
        $stmt ->execute();

        header("Location:home.php");


    }catch(PDOException $e ){
        echo "Not Connected";
    }    
} else {
    exit('Echec lors de l\'ouverture du fichier test.xml.');
}