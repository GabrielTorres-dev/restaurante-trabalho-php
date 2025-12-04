<?php

echo"<h1>Bem vindo Ao painel administrativo</h1>";

echo "<a href ='?pg= cliente_admin_um'>Lista Sabores de hamburguer</a> |";
echo "<a href ='?pg= clienteCadastroUm'></a> |" ;
echo "<a href ='?pg= clinteFormUm'>Formulario para Cadastro de hamburguer</a>";

if(empty($_SERVER['QUERY_STRING'])){
    echo "<h3>Bem vindo ao painel admin hamburguer </h3>";

}else{
    $pg = $_GET['pg'];

    if(file_exists(" $pg.php")) {
        include_once "$pg.php";
    } else {
        echo "<h3>Página '$pg' não encontrada </h3>";
    }
}

