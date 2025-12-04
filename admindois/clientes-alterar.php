<?php

require_once "config.inc.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome_cliente = $_POST["nome_cliente"];
    $numero_contato = $_POST["numero_contato"];
    $endereco = $_POST["endereco "];
    $id_cliente = $_POST["id_cliente"];

    $sql = "UPDATE clientes SET 
            nome_cliente  = '$nome_cliente ',
            numero_contato = '$numero_contato',
            endereco  = '$endereco '
            WHERE id_cliente = '$id_cliente'";

    if(mysqli_query($conexao, $sql)){
        echo "<h3>Cliente alterado com sucesso!</h3>";
        echo "<a href='?pg=clientes-admin'>Voltar</a>";
    }else{
        echo "<h3>Erro ao alterar cadastro do cliente!</h3>";
    }
}else{
    echo "<h2>Acesso negado!</h2>";
    echo "<a href='?pg=clientes-admin'>Voltar</a>";
}

mysqli_close($conexao);
