<?php
 
$ip = $_SERVER["REMOTE_ADDR"];
$host = $_SERVER["HTTP_HOST"];
$port = $_SERVER["REMOTE_PORT"];
$uri = $_SERVER["REQUEST_URI"];

echo "Informações do servidor: ";
echo "<br>";
echo "IP: " . $ip . "<br>";
echo "HOST: " . $host . "<br>";
echo "PORT: " . $port . "<br>";
echo "URI: " . $uri . "<br>";


?>