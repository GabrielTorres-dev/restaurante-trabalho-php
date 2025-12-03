<?php
include_once($_SERVER['DOCUMENT_ROOT']."/Trabalho_um_php/diretorioPrincipal/restaurante-trabalho-php/conexaodois.php");

$id = (int)($_GET['id'] ?? 0);

mysqli_query($con, "DELETE FROM clientes WHERE id = $id");

header("Location: listardois.php?msg=Cliente excluído com sucesso!");
exit;
