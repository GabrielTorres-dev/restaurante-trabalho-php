<?php

require_once 'config.inc.php';


$id_cliente = $_GET['id_cliente'] ?? null;

if ($id_cliente === null) {
    echo "<h2>Nenhum cliente selecionado.</h2>";
    exit;
}

$sql = "SELECT * FROM cliente WHERE id_cliente = '$id_cliente'";
$resultado = mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado) > 0){
    while($dados = mysqli_fetch_array($resultado)){
        $id_cliente     = $dados['id_cliente'];
        $nome_cliente   = $dados['nome_cliente'];
        $numero_contato = $dados['numero_contato'];
        $endereco       = $dados['endereco'];
    }
?>
<h2>Alterar Cliente</h2>

<form action="?pg=clientes-alterar" method="post">
    <input type="hidden" name="id_cliente" value="<?=$id_cliente?>">

    <label>Nome:</label>
    <input type="text" name="nome_cliente" value="<?=$nome_cliente?>"><br>

    <label>Telefone:</label>
    <input type="text" name="numero_contato" value="<?=$numero_contato?>"><br>

    <label>Endereço:</label>
    <input type="text" name="endereco" value="<?=$endereco?>"><br>

    <input type="submit" value="Salvar alterações">
</form>

<?php
} else {
    echo "<h2>Nenhum cliente encontrado!!</h2>";
}
?>

