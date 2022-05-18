<?php 

    
    function checkRequiredField($field,$msg){ 
        if(!isset($field) || strlen($field)==0 || is_numeric($field)==false){             
            throw new Exception($msg);
        }
    }

    $operateurs = array(
        "add"=>"+",
        "sub"=>"-",
        "mult"=>"*",
        "div"=>"/",
        "mod"=>"%",
        "power"=>"power"
    );

    if(isset($_POST["submit"])){
        require "fonctions.php";

        $operande1 = $_POST["op1"];
        $operateur = $_POST["operateur"];
        $operande2 = $_POST["op2"];

        try{
            checkRequiredField($operande1,"Le opérande 1 ne peut pas entre vide ou non numerique");              
            checkRequiredField($operande2,"Le opérande 2 ne peut pas entre vide ou non numerique");
            if(function_exists( $operateur)){
                $result = $operateur($operande1,$operande2);
            }
        }catch(Exception $e){
                $erreur = $e->getMessage();
        }

    }