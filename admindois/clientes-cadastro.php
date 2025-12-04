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



<?php
}
mysqli_close($conexao);
?>
