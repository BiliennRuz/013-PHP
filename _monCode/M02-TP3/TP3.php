<?php

echo "===== EXO 1 =========="."<BR>";

$phrase = "bOnJoUr, jE sUiS UnE pHrAsE pOuR tEsTeR";

$premiereLettreEnMaj = ucwords(strtolower($phrase));
var_dump($premiereLettreEnMaj);

echo "===== EXO 2 =========="."<BR>";

$str = "dupont, gérard, badin, aurélie";
$tab = explode(', ', $str);
var_dump($tab);


foreach($tab as $element) {
    var_dump($element);

echo("<PRE>".sprintf('%-20s',$element)."<BR>");
}
//echo sprintf('%02d/%02d/%04d', 1, 1, 1981);


