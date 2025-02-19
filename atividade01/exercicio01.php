<?php
echo 'exercicio 1 <hr>'; //exercicio 1

$nome='eduardo';
$idade=16;
$salario=100;

echo "oi, qual é o seu nome? <br>";
echo "$nome <br>";
echo "oi $nome, quantos anos voce tem? <br>";
echo "$idade <br>";
echo "então voce tem $idade!!!  <br>";
echo "quanto voce ganha, $nome?  <br>";
echo "$salario  <br>";
echo "$salario! eu espero que seja por hora e não por ano!  <br> <br>";

echo 'exercicio 2 <hr>'; //exercicio 2

define("pi",   3.1415926536);
$raio=5;
$area=4*pi*$raio**2;
$volume = (4/3) * pi * $raio**3;
echo "o raio é $raio <br>";
echo "a area é igual a $area <br>";
echo "o volume é igual a $volume <br><br>";

echo 'exercicio 3 <hr>'; //exercicio 3

$num1 = 10;
$num2 = 3;

echo "Valores: num1 = $num1, num2 = $num2 <br><br>";
$soma = $num1;
$soma += $num2;
echo "Soma: $soma <br>";

$subtracao = $num1;
$subtracao -= $num2;
echo "Subtração: $subtracao <br>";

$multiplicacao = $num1;
$multiplicacao *= $num2;
echo "Multiplicação: $multiplicacao <br>";

$divisao = $num1;
$divisao /= $num2;
echo "Divisão: $divisao <br>";

$resto = $num1;
$resto %= $num2;
echo "Resto da divisão: $resto <br>";

?>