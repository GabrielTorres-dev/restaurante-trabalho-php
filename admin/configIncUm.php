<?php

    $conexao = mysqli_connect("localhost","root","");

    $db = mysqli_select_db ($conexao, "cadastroclientes");

    if($conexao){ 
        echo" <h2>Erro ao conectar ao Banco de dados</h2>";
    }
?>