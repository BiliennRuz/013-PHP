<?php
//déclaraton d'un tableau
$table[] = 'Dom';
$table[] = 'Manu';
$table[] = 12;
$table[] = 18.2;

var_dump($table);
// affichage d'un tableau sans info supplémentaires
print_r($table);

//déclaraton d'un tableau avec index
$table2[5] = 'Dom';
$table2[20] = 'Manu';
$table2[3] = 12;
$table2[40] = 18.2;

var_dump($table2);

print_r($table2);


$promo["QCDA_006F"] = $table2;
$promo["QCDA_007F"] = array("Yannick", "Dominique", "Jérome");

var_dump($promo);
