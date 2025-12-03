<?php
include_once($_SERVER['DOCUMENT_ROOT']."/Trabalho_um_php/diretorioPrincipal/restaurante-trabalho-php/conexaodois.php");

$id = (int)($_GET['id'] ?? 0);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome_cliente   = trim($_POST['nome_cliente'] ?? '');
    $endereco       = trim($_POST['endereco'] ?? '');
    $numero_contato = trim($_POST['numero_contato'] ?? '');

    $stmt = mysqli_prepare($con, "
        UPDATE clientes 
        SET nome_cliente = ?, endereco = ?, numero_contato = ?
        WHERE id = ?
    ");

    mysqli_stmt_bind_param($stmt, "sssi", $nome_cliente, $endereco, $numero_contato, $id);
    mysqli_stmt_execute($stmt);

    header("Location: listardois.php?msg=Cliente atualizado com sucesso!");
    exit;
}

$res = mysqli_query($con, "SELECT * FROM clientes WHERE id = $id");
$r   = mysqli_fetch_assoc($res);
?>

<h2>Editar Cliente</h2>

<form method="post">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome_cliente" value="<?= h($r['nome_cliente'] ?? '') ?>" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco" value="<?= h($r['endereco'] ?? '') ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="numero_contato" value="<?= h($r['numero_contato'] ?? '') ?>" class="form-control">
    </div>

    <button class="btn btn-primary">Salvar Alterações</button>
    <a href="listardois.php" class="btn btn-secondary">Voltar</a>
</form>
