<?php 
    //            G1          G2       G3
    $regex = "/(\d{1,2})\-(\d{1,2})\-(\d{4}|\d{2})/"; // pattern
    $chaine = "12-03-2020";

    $is_match = preg_match($regex,$chaine,$resultat);

    if($is_match){ 
        echo $resultat[0]."<br>";
        echo "Jour: $resultat[1] ";
        echo "Mois: $resultat[2] ";
        echo "Annee: $resultat[3]";
    }


    $motif = "/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/";
    $avant = "01/04/2014";
    $apres = preg_replace($motif,'$3-$2-$1',$avant);

    var_dump($apres);
    