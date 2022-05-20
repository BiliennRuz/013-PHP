<?php 

class ConnectionProvider{

    public static function getConnection(){

        if(file_exists('config.xml')){
            try{
                // DOM
                $xml = simplexml_load_file("config.xml");
                $hote=$xml->host;
                $username=$xml->username;
                $pwd = $xml->password;
                $dbname=$xml->dbname;
                $db = new PDO("mysql:host=$hote;dbname=$dbname",$username,$pwd);// Admin
                return $db;
            }catch(PDOException $e ){
                echo $e->getMessage();
            }
        }
    }

}