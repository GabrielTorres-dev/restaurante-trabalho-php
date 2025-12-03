<?php
// MOSTRAR ERROS
error_reporting(E_ALL);
ini_set('display_errors', 1);

// conexão
include "conexao.php";

// CADASTRAR
if (isset($_POST['acao']) && $_POST['acao'] == 'criar') {

    $tipo  = $_POST['TipodoHamburguer'];
    $valor = $_POST['valorDoHamburguer'];

    $sql = "INSERT INTO hamburguer (TipodoHamburguer, valorDoHamburguer) 
            VALUES ('$tipo', '$valor')";

    if (mysqli_query($con, $sql)) {
        echo "<p style='color:green;'>✅ Hambúrguer cadastrado com sucesso!</p>";
    } else {
        echo "<p style='color:red;'>❌ Erro ao cadastrar: " . mysqli_error($con) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Hambúrguer</title>
</head>
<body>

<h2>Cadastrar Hambúrguer</h2>

<form method="POST">
    <input type="hidden" name="acao" value="criar">

    <label>Tipo do Hambúrguer:</label><br>
    <input type="text" name="TipodoHamburguer" required><br><br>

    <label>Valor do Hambúrguer:</label><br>
    <input type="number" name="valorDoHamburguer" step="0.01" required><br><br>

    <button type="submit">Cadastrar</button>
</form>

<hr>

<h2>Hambúrgueres Cadastrados</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Tipo</th>
        <th>Valor</th>
    </tr>

    <?php
    $consulta = "SELECT * FROM hamburguer";
    $resultado = mysqli_query($con, $consulta);

    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>{$linha['id_hamburguer']}</td>";
        echo "<td>{$linha['TipodoHamburguer']}</td>";
        echo "<td>R$ " . number_format($linha['valorDoHamburguer'],2,',','.') . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
