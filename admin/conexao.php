<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "trabalho_um_php";

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die("Erro ao conectar ao banco: " . mysqli_connect_error());
}
?>
