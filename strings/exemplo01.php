<?php

$nome = "alvaro";

$nome = strtoupper($nome);

$nome = strtolower($nome);

//$nome = str_replace("a", "@", $nome);

echo "Nome: " . $nome = ucfirst($nome);;

echo "<br>";

$frase = "Deus ajuda quem cedo madruga";

$palavra = "cedo";
$q = strpos($frase, $palavra);

echo "posição da palavra cedo: " . $q;

echo "<br>";

$frase1 = substr($frase, 0, $q);

echo "Frase1: " . $frase1;

echo "<br>";


$frase2 = substr($frase, 15, $q);

echo "Frase2: " . $frase2;

echo "<br>";

$f = strlen($frase);

echo "<br>";

echo $f;


$nome = ucfirst($nome);


?>