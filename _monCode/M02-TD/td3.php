<?php

$a=12;
var_dump($a);

$b=6;
unset($b);
var_dump($b);

$c=8;

if(isset($c)){
    echo '$c existe';
}

if(!empty($a)){
    echo "$a Pas vide";
}