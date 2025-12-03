<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/Trabalho_um_php/diretorioPrincipal/restaurante-trabalho-php/conexaodois.php");


$id = (int)($_GET['id'] ?? 0);

if ($id > 0) {

    $stmt = mysqli_prepare($con, "DELETE FROM clientes WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

}

header("Location: listardois.php?msg=Cliente excluído com sucesso!");
exit;
