<?php
include_once("../conexaodois.php");
include_once("../topo.php");
$id = (int)($_GET['id'] ?? 0);
if ($_POST) {
  $nome_cliente = mysqli_real_escape_string($con, trim($_POST['nome_cliente']));
  $endereco = mysqli_real_escape_string($con, trim($_POST['endereco']));
  $numero_contato = mysqli_real_escape_string($con, trim($_POST['numero_contato']));
  mysqli_query($con, "UPDATE clientes SET nome='$nome_cliente',endereco='$endereco',numero_contato='$numero_contato' WHERE id=$id");
  header("Location: listardois.php?msg=Cliente atualizado!");
  exit;
}
$r = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM clientes WHERE id=$id"));
?>
<h2>Editar Cliente</h2>
<form method="post">
  <div class="mb-3"><label>Nome</label><input type="text" name="nome" value="<?=h($r['nome_clienye'])?>" class="form-control"></div>
  <div class="mb-3"><label>Endereço</label><input type="email" name="email" value="<?=h($r['endereco'])?>" class="form-control"></div>
  <div class="mb-3"><label>Telefone</label><input type="text" name="numero_contato" value="<?=h($r['numero_contato'])?>" class="form-control"></div>
  <button class="btn btn-primary">Salvar Alterações</button>
  <a href="listardois.php" class="btn btn-secondary">Voltar</a>
</form>
<?php include_once("../rodape.php"); ?>