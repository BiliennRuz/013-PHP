<?php

echo "====== preg_match ========="."<BR>";

$motif = '#^([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})$#';
// Tableau contenant les chaines à tester :
$dates[] = '1/4/2018'; // OK
$dates[] = '10/04/2018'; // OK
$dates[] = '10/04/18'; // KO car l'année n'est pas sur 4 chiffres
echo '<ul>';
foreach ($dates as $date) {
    echo '<li>Test de ' . $date . ' : ';
    $ok = (preg_match($motif, $date, $resultat) > 0);
    if ($ok) {
        echo 'est valide :<ul><li>jour : ' . $resultat[1] . '</li><li>mois : ' . $resultat[2] .
        	'</li><li>année : ' . $resultat[3] . '</li></ul></li>';
    } else {
        echo 'n\'est pas valide';
    }
}
echo '</ul>';


echo "====== preg_replace ========="."<BR>";

$motif = '#^([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})$#';
//$motif = "/(\d{1,2}\-(\d{1,2}\-(\d{4}|(\d{2})/";
$avant = '01/04/2014';
$apres = preg_replace($motif, '$3-$2-$1', $avant);
echo $avant . ' > ' . $apres;

