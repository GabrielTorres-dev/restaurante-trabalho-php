<?php

echo "<h1>Painel administrativo</h1>";

if (empty($_SERVER['QUERY_STRING'])) {
    echo "<h3>Bem-vindo ao painel admin.</h3>";
} else {
    $pg = $_GET['pg'];

    
    if (file_exists("$pg.php")) {
        include_once "$pg.php";
    } else {
        echo "<h3>Página '$pg' não encontrada.</h3>";
    }
}
