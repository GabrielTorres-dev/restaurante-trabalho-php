<?php
include_once("../conexaodois.php");
include_once("../topo.php");

if ($_POST) {
  $nome_cliente = mysqli_real_escape_string($con, trim($_POST['nome_cliente']));
  $endereco = mysqli_real_escape_string($con, trim($_POST['endereco']));
  $numero_contato = mysqli_real_escape_string($con, trim($_POST['numero_contato']));
  if ($nome_cliente == '') $erro = "Nome é obrigatório.";
  else {
    mysqli_query($con, "INSERT INTO clientes (nome_cliente,enderco,numero_contato) VALUES ('$nome_cliente','$endereco','$numero_contato')");
    header("Location: listardois.php?msg=Cliente cadastrado com sucesso!");
    exit;
  }
}
?>
<h2>Novo Cliente</h2>
<?php if(!empty($erro)) echo "<div class='alert alert-danger'>$erro</div>"; ?>
<form method="post">
  <div class="mb-3"><label class="form-label">Nome</label><input type="text" name="nome_cliente" class="form-control" required></div>
  <div class="mb-3"><label class="form-label">Endereço</label><input type="email" name="endereco" class="form-control"></div>
  <div class="mb-3"><label class="form-label">Telefone</label><input type="text" name="numero_contato" class="form-control"></div>
  <button class="btn btn-success">Salvar</button>
  <a href="listardois.php" class="btn btn-secondary">Cancelar</a>
</form>
<?php include_once("../rodape.php"); ?>