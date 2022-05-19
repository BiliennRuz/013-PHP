<?php 



    try{

        $hote="localhost";
        $username="root";
        $pwd = "";
        $dbname="db_php";
        $db = new PDO("mysql:host=$hote;dbname=$dbname",$username,$pwd);// Admin
    
        $sql = "SELECT * FROM article";
        
        $stmt = $db->query($sql);
        //$arr = $stmt->fetchAll(PDO::FETCH_ASSOC); // tableau
        $one = $stmt->fetch(PDO::FETCH_ASSOC);

        var_dump($one);

    }catch(PDOException $e ){
        echo "Not Connected";
    }