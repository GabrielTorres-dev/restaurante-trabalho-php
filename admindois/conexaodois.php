<?php
$con = mysqli_connect("localhost", "root", "", "cadastroclientes");

if (!$con) {
    die("Erro na conexão");
}

mysqli_set_charset($con, "utf8");
