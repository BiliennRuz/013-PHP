<?php
// calcul

if(isset($_POST["cnx"])){
    //var_dump($_POST);
    if(isset($_POST['operande1']) && !empty($_POST['operande1'])) {
        //echo "Operande 1 : {$_POST['operande1']}";
        //echo "<br>";
        $operande1 = $_POST['operande1'];
    } else {
        $erreur = "Le champs Operande 1 ne peut être vide !";
    }
    if(isset($_POST['operateur']) && !empty($_POST['operateur'])) {
        //echo "Operateur : {$_POST['operateur']}";
        //echo "<br>";
        $operateur = $_POST['operateur'];
    } else {
        $erreur = "Le champs Operateur ne peut être vide !";
    }
    if(isset($_POST['operande2']) && !empty($_POST['operande2'])) {
        //echo "Operande2 : {$_POST['operande2']}";
        //echo "<br>";
        $operande2 = $_POST['operande2'];
    } else {
        $erreur = "Le champs Operande 2 ne peut être vide !";
    }

    $calcul = "$operande1 $operateur $operande2";
    $resultat = "résultat : ". operation($operande1, $operande2, $operateur);
}

function operation($valeur1, $valeur2, $fonction) {
    switch ($fonction) {
        case "+":
            $fonction = "adition";
            break;
        case "-":
            $fonction = "soustraction";
            break;
        case "*":
            $fonction = "multiplication";
            break;
        case "/":
            $fonction = "division";
            break;
        case "/":
            $fonction = "modulo";
            break;
        default:
            $fonction = "?";
            break;
    }
    if (is_string($fonction) && !function_exists($fonction)) {
        $retour = 'La fonction "' . $fonction . '" n\'existe pas !';
    } else {
        if ($fonction == "division" && $valeur2 == 0) {
            $erreur = "On divise pas par 0 !";
        } else {
            $retour = $fonction($valeur1, $valeur2);
        }
    }
    return $retour;
} 

function adition($valeur1, $valeur2) {
    return $valeur1 + $valeur2;
}

function soustraction($valeur1, $valeur2) {
    return $valeur1 - $valeur2;
}

function multiplication($valeur1, $valeur2) {
    return $valeur1 * $valeur2;
}

function division($valeur1, $valeur2) {
    return $valeur1 / $valeur2;
}

function modulo($valeur1, $valeur2) {
    return $valeur1 % $valeur2;
}

?>