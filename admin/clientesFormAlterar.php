<?php  
require_once 'configIncUm.php';

$id_hamburguer = $_GET['id_hamburguer'] ?? null;

if ($id_hamburguer === null) {
    echo "<h2>Nenhum hamburguer selecionado.</h2>";
    exit;
}

$sql = "SELECT * FROM hamburguer WHERE id_hamburguer = '$id_hamburguer'";
$resultado = mysqli_fetch_array($conexao, $sql);

if(mysqli_num_rows($resultado) > 0) {
    while ($dados = mysqli_fetch_array($resultado)){
        $id_hamburguer = $dados['id_hamburguer'];
        $TipoDeHamburguer = $dados['TipodeHamburguer'];
        $valorDoHamburguer = $dados['valorDeHamburguer'];
    }

?>
<h2>Alterar hamburguer</h2>

<form action="?pg=clienteAlterar" method="post">
    <input type="hidden" name="id_cliente" value="<?=$id_hamburguer?>">

    <label>Tipo do hamburguer</label>
    <input type="text" name="TipoDeHamburguer" value="<?=$TipoDeHamburguer?>"><br>

    <label>Valor</label>
    <input type="text" name=" valorDoHamburguer" value="<?=$valorDoHamburguer?>"><br>

    <input type="submit" value="Salvar alterações">
</form>

<?php
} else {
    echo "<h2>Nenhum cliente encontrado!!</h2>";
}
?>
