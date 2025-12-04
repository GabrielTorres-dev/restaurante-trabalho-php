<?php

    $conexao = mysqli_connect("localhost","root","");

    $db = mysqli_select_db ($conexao, "cadastrocliente");

    if($conexao){ 
        echo" <h2>Erro ao conectar ao Banco de dados</h2>";
    }
?>