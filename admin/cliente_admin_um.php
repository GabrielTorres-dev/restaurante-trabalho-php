<?php

    require_once "configIncUm.php";

    $sql = "SELECT *FROM hamburguer";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows ($resultado) > 0){

       while($dadps = mysqli_fetch_array($resultado)) {

            echo "ID:" . $dados ['id_hamburguer'] . "<br>";
            echo "Tipo Do hamburguer" . $dados ['TipoDeHamburguer'] . "<br>";
            echo "Valor Do Hamburguer" . $dados ['valorDoHamburguer'] . "<br>";


            echo "<a href='?pg=clienteExcluir&id_hamrburguer={$dados['id_hamburguer']}'>Excluir Hamburguer.</a>";
            echo "<a href='?pg=clienteFormAlterar&id_hambruguer{$dados['id_hamburguer']}'>Alterar hamburguer</a>";

            echo"<hr>";
       }
    } else{
        echo "Nenhum Cliente Cadastrado!";
    }
?>