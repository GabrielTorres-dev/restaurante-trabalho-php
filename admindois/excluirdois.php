<?php
$id = (int)($_GET['id'] ?? 0);
mysqli_query($con, "DELETE FROM clientes WHERE id=$id");
header("Location: listardois.php?msg=Cliente excluído!");