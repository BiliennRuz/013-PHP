<?php 


class IndexController{

    public static function index(){
        $db = ConnectionProvider::getConnection(); // obtenir la connexion
        $sql = "select * from article"; // requette SQL
        $stmt = $db->query($sql); // Traitement de la requette 
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // recup de données
    }

}