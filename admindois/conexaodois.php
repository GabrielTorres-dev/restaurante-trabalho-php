<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // vazio mesmo
$dbname = 'restaurante-trabalho-php';

$con = mysqli_connect($host, $user, $pass, $dbname);

if (!$con) {
    die("Erro na conexão: " . mysqli_connect_error());
}
function h($v) { return htmlspecialchars($v, ENT_QUOTES, 'UTF-8'); }
?>
