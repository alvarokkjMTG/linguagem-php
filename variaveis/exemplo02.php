<?php

$nome = "Álvaro";
$anoNascimento = 2008;
$nomeCompleto = "Álvaro Bruno";

$nome1 = "Marcelo";
var_dump($anoNascimento);
//unset ($nomeCompleto);
echo "<br>";

if (isset($nomeCompleto)) {
echo "Nome Completo: "  . $nomeCompleto;
exit;
}
echo "<br>";
echo "Ano Nascimento: " . $anoNascimento;



?>