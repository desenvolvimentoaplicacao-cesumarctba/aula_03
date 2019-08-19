<?php
// Your code here!
//Exercicio 1//
 
$tempo = readline("Digite a duração da viajem: ");
$velMedia = readline("Digite a valocidade média da viajem: ");
 
$distancia = $tempo * $velMedia;
echo "distancia percorrida: $distancia\n";
$litros_usados = $distancia / 12;
 
$resultado = $litros_usados;
 
echo "litros usados foram: $resultado \n";
>