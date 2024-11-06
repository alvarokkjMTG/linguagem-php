<Form method = "get">
    <input type = "text" name = "nome">
    <input type = "text" name = "email">
    <input type = "date" name = "nascimento">
    <input type = "submit" value = "OK">
</Form>
<?php

foreach($_GET as $key => $value){
    echo "Nome: " . $value . "<br>";
    echo "Indice do Campo: " . $key . "<br>";
    echo"<hr>";
}


?>