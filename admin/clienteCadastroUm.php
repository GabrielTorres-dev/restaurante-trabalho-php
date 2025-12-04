<?php
require_once "configIncUm.php";

if ($_SERVER ["REQUEST_METHOD"] == "POST" ){

    $TipoDeHamburguer = $_POST["TipoDeHamburguer"];
    $valorDoHamburguer = $_POST["valorDoHamburguer"];

    $sql = "INSERT INTO hamburguer (TipoDeHamburguer, valorDoHamburguer)
            VALUES ('$TipoDeHamburguer', '$valorDoHamburguer')";

    if(mysqli_query($conexao, $sql )) {
        echo "<h3>Hamburguer cadastrado com sucesso!</h3>";
        echo "<a href = '?pg=clientes_admin_um'>Voltar</a>";
    } else {
        echo"Erro ao cadastradar o sabor de hmburguer";
    }       
}
?>

<?php

    mysqli_close( $conexao);
    
?>