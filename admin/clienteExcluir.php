<?php  

 require_once "configIncUm.php";

 $id_hamburguer = $_GET["id_hamburguer"];
 $sql = "DELETE * FROM  hamburguer WHERE id_hamburguer = '$id_hamburguer'";

$resultado = mysqli_query( $conexao, $sql);


if($resultado) {
    echo "Registro excluido com sucesso!";
    echo "<a href='?pg=clientes_admin_um'>Voltar</a>";
} else {
    echo "Erro ao excluir registro";
}
mysqli_close($conexao);