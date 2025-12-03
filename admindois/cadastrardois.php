<?php
include_once(__DIR__ . "/../conexaodois.php");

$erro = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome_cliente   = trim($_POST['nome_cliente'] ?? '');
    $endereco       = trim($_POST['endereco'] ?? '');
    $numero_contato = trim($_POST['numero_contato'] ?? '');

    if ($nome_cliente == '') {
        $erro = "Nome é obrigatório.";
    } else {

        $stmt = mysqli_prepare($con, 
            "INSERT INTO clientes (nome_cliente, endereco, numero_contato) VALUES (?, ?, ?)"
        );

        mysqli_stmt_bind_param($stmt, "sss", $nome_cliente, $endereco, $numero_contato);
        mysqli_stmt_execute($stmt);

        header("Location: listardois.php?msg=Cliente cadastrado com sucesso!");
        exit;
    }
}
?>

<h2>Novo Cliente</h2>
<?php if(!empty($erro)) echo "<div class='alert alert-danger'>$erro</div>"; ?>
<form method="post">
  <div class="mb-3"><label class="form-label">Nome</label><input type="text" name="nome_cliente" class="form-control" required></div>
  <div class="mb-3"><label class="form-label">Endereço</label><input type="text" name="endereco" class="form-control"></div>
  <div class="mb-3"><label class="form-label">Telefone</label><input type="text" name="numero_contato" class="form-control"></div>
  <button class="btn btn-success">Salvar</button>
  <a href="listardois.php" class="btn btn-secondary">Cancelar</a>
</form>
<?php 