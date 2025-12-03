<?php
include_once(__DIR__ . "/../conexaodois.php");

$id = (int)($_GET['id'] ?? 0);

if ($id <= 0) {
    header("Location: listardois.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome_cliente   = trim($_POST['nome_cliente'] ?? '');
    $endereco       = trim($_POST['endereco'] ?? '');
    $numero_contato = trim($_POST['numero_contato'] ?? '');

    if ($nome_cliente != '') {

        $stmt = mysqli_prepare($con,
            "UPDATE clientes
             SET nome_cliente = ?, endereco = ?, numero_contato = ?
             WHERE id = ?"
        );

        mysqli_stmt_bind_param($stmt, "sssi", $nome_cliente, $endereco, $numero_contato, $id);
        mysqli_stmt_execute($stmt);

        header("Location: listardois.php?msg=Cliente atualizado!");
        exit;
    }
}

$stmt = mysqli_prepare($con, "SELECT nome_cliente, endereco, numero_contato FROM clientes WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$r = mysqli_fetch_assoc($result);

if (!$r) {
    header("Location: listardois.php");
    exit;
}
?>

<h2>Editar Cliente</h2>

<form method="post">

  <div class="mb-3">
    <label>Nome</label>
    <input type="text" name="nome_cliente" value="<?= h($r['nome_cliente']) ?>" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Endereço</label>
    <input type="text" name="endereco" value="<?= h($r['endereco']) ?>" class="form-control">
  </div>

  <div class="mb-3">
    <label>Telefone</label>
    <input type="text" name="numero_contato" value="<?= h($r['numero_contato']) ?>" class="form-control">
  </div>

  <button class="btn btn-primary">Salvar Alterações</button>
  <a href="listardois.php" class="btn btn-secondary">Voltar</a>

</form>
