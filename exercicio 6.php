<?php
$alt = readline ("Informe sua altura:");
$pes = readline ("Informe seu peso:");

$alt2 = $alt * $alt;
$imc = $pes / $alt2;

echo ("O seu IMC é: $imc".PHP_EOL);

if ($imc<18.5){
  echo ("Você está abaixo do peso.".PHP_EOL);
  }
if (($imc>=18.5) && ($imc<=24.9)){
  echo ("Seu peso está normal.".PHP_EOL);
  }
if (($imc>=25) && ($imc<=29.9)){
  echo ("Você está com sobrepeso.".PHP_EOL);
  }
if (($imc>=30) && ($imc<=34.9)){
  echo ("Você está com Obesidade grau 1.".PHP_EOL);
  }
if (($imc>=35) && ($imc<=39.9)){
  echo ("Você está com Obesidade grau 2.".PHP_EOL);
  }
if ($imc>=40){
  echo ("Você está com Obesidade grau 3.".PHP_EOL);
  }
?>