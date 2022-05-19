<?php

echo "===== EXO 1 =========="."<BR>";

$tableau["Ladur"] = ["Roger", "Gouezec", 44];
$tableau["Chao"] = ["Manu", "Paris", 38];
$tableau["le Rest"] = ["Marcel", "Brest", 87];

var_dump($tableau);

echo "===== EXO 2 =========="."<BR>";

$tableau2["Ladur"]["prénom"] = "Roger";
$tableau2["Ladur"]["résidence"] = "Gouezec";
$tableau2["Ladur"]["age"] = 44;
$tableau2["Chao"]["prénom"] = "Manu";
$tableau2["Chao"]["résidence"] = "Paris";
$tableau2["Chao"]["age"] = 38;
$tableau2["le Rest"]["prénom"] = "Marcel";
$tableau2["le Rest"]["résidence"] = "Brest";
$tableau2["le Rest"]["age"] = 87;
var_dump($tableau2);

echo "======= EXO 3 ========"."<BR>";

echo "<ul>";
foreach ($tableau2 as $key => $value) {
    echo "<li>";
    echo "Element: ".$key."<BR>";
    echo "</li>";
    echo "<ul>";
    foreach($value as $key2 => $value2) {
        echo "<li>";
        echo "Element ".$key2.": ".$value2."<BR>";
        echo "</li>";
    }
    echo "</ul>";
}
echo "</ul>";


