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


