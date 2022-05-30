<?php 

if (file_exists('test.xml')) {
    $xml = simplexml_load_file('test.xml');
    try{

        $hote=$xml->host;
        $username=$xml->username;
        $pwd = $xml->password;
        $dbname=$xml->dbname;
        $db = new PDO("mysql:host=$hote;dbname=$dbname",$username,$pwd);// Admin
    
// /**
//  *  Insert new article
//  */
//         $sql = "INSERT INTO article (titre, description, prix) VALUES (:titre, :desc, :prix)";
//         $stmt = $db-> prepare($sql);
//         $stmt ->bindValue(":titre", "Samsug s22");
//         $stmt ->bindValue(":desc", "téléphone Samsug s22");
//         $stmt ->bindValue(":prix", 1200);
//         $stmt ->execute();

// /**
//  *  update article 2
//  */

// $sql = "UPDATE article SET prix=:prix WHERE titre=:titre";
// $stmt = $db-> prepare($sql);
// $stmt ->bindValue(":titre", "bouteille");
// $stmt ->bindValue(":prix", 1000);
// $stmt ->execute();


/**
 *  Select all articles
 */

        $sql = "SELECT * FROM article";
        
        $stmt = $db->query($sql);
        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC); // tableau
        $one = $stmt->fetch(PDO::FETCH_ASSOC);

        var_dump($arr);

    }catch(PDOException $e ){
        echo "Not Connected";
    }    
} else {
    exit('Echec lors de l\'ouverture du fichier test.xml.');
}