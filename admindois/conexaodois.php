<?php
$host   = "localhost";
$user   = "root";
$pass   = "";
$dbname = "cadastroclientes";

$con = mysqli_connect($host, $user, $pass, $dbname);

if (!$con) {
    die("Erro de conexão: " . mysqli_connect_error());
}

function h($v) {
    return htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
}
