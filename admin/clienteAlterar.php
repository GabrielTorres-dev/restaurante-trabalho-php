<?php 

require_once "configIncUm.php";


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_hamburguer = $_POST["id_haburguer"];
    $TipoDeHamburguer = $_POST["TipoDeHamburguer"];
    $valorDoHamburguer = $_POST["valorDoHmburguer"];

    $sql = "UPDATE hamburguer SET
            WHERE id_hamburguer = '$id_hamburguer'
            TipoDeHamburguer = '$TipoDeHamburguer'
            valorDoHAmburguer = '$valorDoHamburguer'";


if(mysqli_query($conexao,$sql)) {

    echo "<h3>Hamburguer alterado com sucesso</h3>";
    echo"<a href='?pg=cliente_admin_um'>Voltar </a>";
}else{
    echo "<h3>Erro a alterar cadastrado do hamburguer</h3>";
}
}
?>