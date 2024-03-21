<?php
$servername = "localhost";
$database = "system_sbq_database";
$username =  "root";#eeepmm_sbqsystem
$password = "";#ee3pm41@3!MM

$conexao = mysqli_connect($servername, $username, $password, $database);
if(!$conexao){
die("Connection failed: " . mysqli_connect_error());
};
?>
