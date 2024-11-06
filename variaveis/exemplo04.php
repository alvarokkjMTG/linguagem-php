<?php

//Query String
//$idade = $_GET["idade"];

//Converter Idade para INTEGER
$idade = (int)$_GET["idade"];
echo "<br>";
echo "Idade: " . $idade;
echo "<br>";
var_dump($idade);

?>