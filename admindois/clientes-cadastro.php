<?php
require_once "config.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome_cliente     = $_POST["nome_cliente"];
    $numero_contato   = $_POST["numero_contato"];
    $endereco         = $_POST["endereco"];

    $sql = "INSERT INTO clientes (nome_cliente, numero_contato, endereco)
            VALUES ('$nome_cliente', '$numero_contato', '$endereco')";

    if (mysqli_query($conexao, $sql)) {
        echo "<h3>Cliente cadastrado com sucesso!</h3>";
        echo "<a href='?pg=clientes-admin'>Voltar</a>";
    } else {
        echo "<h3>Erro ao cadastrar cliente!</h3>";
    }

} else {
?>

<h2>Cadastrar Cliente</h2>
<form action="?pg=cadastroclientes" method="GET">

    <label>Nome:</label>
    <input type="text" name="nome_cliente"><br>

    <label>Telefone:</label>
    <input type="text" name="numero_contato"><br>

    <label>Endereço:</label>
    <input type="text" name="endereco"><br>

    <input type="submit" value="Cadastrar Cliente">

</form>

<?php
}
mysqli_close($conexao);
?>
