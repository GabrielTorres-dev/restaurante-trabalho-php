<?php

$host   = "localhost";
$user   = "root";
$pass   = "";
$dbname = "cadastroclientes";

$con = mysqli_connect($host, $user, $pass, $dbname);

if (!$con) {
    die("Erro na conexão: " . mysqli_connect_error());
}

mysqli_set_charset($con, "utf8");

function h($v) {
    return htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
}
