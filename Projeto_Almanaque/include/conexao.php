<?php
$hostname = "localhost";
$database = "biblioteca";
$username = "root";
$password = "";

$mysqli = new mysqli($hostname, $username, $password, $database);

if($mysqli->connect_errno){
    echo "Conexão não Efetuada <br><br>";
}
?>