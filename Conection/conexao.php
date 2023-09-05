<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "mylibrarydb";

$mysqli = new mysqli($hostname, $username, $password, $database);

if($mysqli -> error){
    die("Falha na conexão");
}

?>