<?php

//Tipos Variaveis Simples
//String
$nome = "Marcelo";
//Integer
$ano = 2024;
//Float (ponto flutuante)
$salario = 1500.50;
//Boolean (booleano)
$bloqueado = true;


//Tipos Variaveis Compostas
//Array
$frutas = array("abacaxi","laranja","melancia","manga","limao","amora","batata");
echo $frutas[6];
echo "<br>";
echo $frutas[5];
echo "<br>";
echo $frutas[4];
echo "<br>";
echo $frutas[3];
echo "<br>";
echo $frutas[2];
echo "<br>";
echo $frutas[1];
echo "<br>";
echo $frutas[0];
echo "<br>";
$data = new DateTime();
var_dump($data);
echo "<br>";
//Tipo Variaveis Especiais
$arquivo = fopen("exemplo03.php","r");
var_dump($arquivo);



?>

$ano = 0;
$nome = "";

$endereco = NULL;


