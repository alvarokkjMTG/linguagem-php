<?php

//escopo3
$nome = "Marechal Deodoro";

function exibirNome(){
    //escopo1
    //global $nome; 
    $nome = "Dom Pedro I";
    echo "Nome: " . $nome;
}

echo "<br>";
function exibirNome2(){
    //escopo2
    $nome = "Tiradentes";
    echo "Nome: " . $nome;

}

    exibirNome();

    echo "<br>";
    exibirNOme2();
    echo "<br>";
    echo "Nome: " . $nome;

?>