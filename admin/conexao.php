<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "cadastrocliente";

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die("Erro ao conectar ao banco: " . mysqli_connect_error());
}
?>
