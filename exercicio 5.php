<?php
// Your code here!
//Exercicio 5//
/*Primeiro F = ( 9 * C + 160 ) / 5//
Segundo K = (C + 273.15) */

$fahr  =  readline ( " digite a temperatura em graus fahrenheit: " );
$cels  = ((( $fahr - 32) *5) /9);
$kelvin  = ( $cels + 273.15);
echo " a temperatura em kelvin é:  $kelvin ";
?>