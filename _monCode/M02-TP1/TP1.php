<?php

echo "====== EXO1 ========="."<BR>";

$a = true;
$b = 42;
$c = 12.34;
$d = "Hello !";

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

echo "====== EXO2 ========="."<BR>";

$x = "PostgreSQL"; 
$y = "MySQL"; 
$z = &$x; 
$x = "PHP 5"; 
$y = &$x;

echo '$x="PHP 5"'."<BR>";
echo '$y="PHP 5"'."<BR>";
var_dump($x);
var_dump($y);

echo "====== EXO3 ========="."<BR>";

echo "====== EXO4 ========="."<BR>";
 
$X = "PHP7"; 
$A = &$X; 
$Y = " 7 eme version de PHP"; 
$Z = $Y * 10; 
$X = $Y * $Y;

echo '$X de type String'."<BR>";
echo '$Ade type String'."<BR>";
echo '$Y de type String'."<BR>";
echo '$Z de type int'."<BR>";
echo '$Z de type int'."<BR>";
var_dump($X);
var_dump($A);
var_dump($Y);
var_dump($Z);
var_dump($X);