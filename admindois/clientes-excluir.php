<?php

    require_once "config.inc.php";
    $id_cliente = $_GET["id_cliente"];
    $sql = "DELETE FROM cliente WHERE id_cliente = '$id_cliente'";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "Registro excluido com sucesso!";
        echo "<a href='?pg=clientes-admin'>Voltar</a>";
    }else{
        echo "Erro ao excluir registro!";
    }

    mysqli_close($conexao);

