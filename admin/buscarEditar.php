<?php
include "conexao.php";
?>
$editando = null;

if (isset($_GET['edit'])) {

    $id = $_GET['edit'];

    $sql = "SELECT * FROM hamburguer WHERE id_hamburguer = '$id'";
    $res = mysqli_query($con, $sql);

    $editando = mysqli_fetch_assoc($res);
}
?>
