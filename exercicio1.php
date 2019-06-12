<?php

function FahrparaCel ($tf) {

    $tc = ($tf -32) * 5/9;
    return $tc;

}

print "\nDigite a temperatura em Fahrenheit: " ;
$tf = (float)fgets(STDIN);

$tc = FahrparaCel($tf);

print "$tf Fahrenheit equivalem a $tc ° Celsius \n \n";