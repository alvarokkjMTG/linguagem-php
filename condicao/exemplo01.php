<?php

$diaDaSemana = 8;
echo "<br>";
switch ($diaDaSemana) {
    case 0:
        echo "Domingo";
        echo "<br>";
    break;
    case 1:
        echo "Segunda";
        echo "<br>";
        break;
    case 2:
        echo "Terça";
        echo "<br>";
        break;
    case 3:
        echo "Quarta";
        echo "<br>";
        break;
    case 4:
        echo "Quinta";
        echo "<br>";
        break;
    case 5:
        echo "Sexta";
        echo "<br>";
        break;
    case 6:
        echo "Sabado";
        break;
        default:
        echo "Data invalida";
}

?>