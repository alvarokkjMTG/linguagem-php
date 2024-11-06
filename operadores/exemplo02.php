<?php

//operadores de comparação
$a = 300;
$b = 55;
//comparar se é maior
var_dump($a > $b);
$comparar = $a > $b;
echo "<br>";
var_dump($a < $b);

//atribuição de valor "="
echo "<br>";

//var_dump($a = $b);

//operador de igualdade
echo "<br>";
$a == $b;
var_dump($a == $b);
//operador de igualdade e tipo
echo "<br>";
$a === $b;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($a === $b);

//operador de valor de diferença
echo "<br>";
echo ($a);
echo "<br>";
echo ($b);
echo "<br>";
var_dump($a != $b);

//operador spaceship
$a = 55;
$b = 55;
echo "<br>";
var_dump($a <=> $b);


?>