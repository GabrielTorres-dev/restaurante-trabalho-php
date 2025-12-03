<?php
include "conexao.php";

// --- CRIAR ---
if (isset($_POST['acao']) && $_POST['acao'] == 'criar') {

    $tipo  = $_POST['TipodoHamburguer'];
    $valor = $_POST['valorDoHamburguer'];

    $sql = "INSERT INTO hamburguer (TipodoHamburguer, valorDoHamburguer)
            VALUES ('$tipo', '$valor')";

    mysqli_query($con, $sql);
}

// --- DELETAR ---
if (isset($_GET['delete'])) {

    $id = $_GET['delete'];

    $sql = "DELETE FROM hamburguer WHERE id_hamburguer = '$id'";
    mysqli_query($con, $sql);
}

// --- EDITAR ---
if (isset($_POST['acao']) && $_POST['acao'] == 'editar') {

    $id    = $_POST['id_hamburguer'];
    $tipo  = $_POST['TipodoHamburguer'];
    $valor = $_POST['valorDoHamburguer'];

    $sql = "UPDATE hamburguer 
            SET TipodoHamburguer='$tipo', valorDoHamburguer='$valor'
            WHERE id_hamburguer='$id'";

    mysqli_query($con, $sql);
}
?>
