<?php

echo "<h1>Painel administrativo</h1>";

echo "<a href='?pg=clientes-admin'>Listar Clientes</a> | ";
echo "<a href='?pg=clientes-cadastro'></a> | ";
echo"<a href= '?pg=clientesForm'>Formulario para cadastro. </a>  |";

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
