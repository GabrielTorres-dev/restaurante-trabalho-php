<?php

    require_once "config.inc.php";

    $sql = "SELECT * FROM clientes";

    $resultado = mysqli_query($conexao, $sql);


    echo "<h2>Lista de Clientes</h2><hr>";

    if (mysqli_num_rows($resultado) > 0) {
        while($dados = mysqli_fetch_array($resultado)) {
            echo "ID: " . $dados['id_cliente'] . "<br>";
            echo "Nome: " . $dados['nome_cliente'] . "<br>";
            echo "Telefone: " . $dados['numero_contato'] . "<br>";
            echo "Endereço: " . $dados['endereco'] . "<br>";
            echo "<a href='?pg=clientes-form&id=$dados[id]'>Editar</a>";
            echo " | <a href='?pg=clientes-excluir&id=$dados[id]'>Excluir</a>";
            echo "<hr>";
        }
    }else{
        echo "Nenhum cliente cadastrado!";
    }
