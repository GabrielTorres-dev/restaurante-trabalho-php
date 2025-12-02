<?php
include_once("../conexaodois.php");
include_once("../topo.php");

$msg = $_GET['msg'] ?? '';
$res = mysqli_query($con, "SELECT * FROM clientes ORDER BY id DESC");
?>
<h2>Clientes</h2>
<a href="cadastrardois.php" class="btn btn-success mb-3">Novo Cliente</a>
<?php if ($msg): ?><div class="alert alert-info"><?=h($msg)?></div><?php endif; ?>

<table class="table table-striped">
  <thead><tr><th>ID</th><th>Nome</th><th>Email</th><th>Telefone</th><th>Ações</th></tr></thead>
  <tbody>
    <?php while($r = mysqli_fetch_assoc($res)): ?>
      <tr>
        <td><?=h($r['id'])?></td>
        <td><?=h($r['nome_cliente'])?></td>
        <td><?=h($r['endereco'])?></td>
        <td><?=h($r['numero_contato'])?></td>
        <td>
          <a href="editardois.php?id=<?=$r['id']?>" class="btn btn-sm btn-primary">Editar</a>
          <a href="excluirdois.php?id=<?=$r['id']?>" onclick="return confirm('Excluir cliente?')" class="btn btn-sm btn-danger">Excluir</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>
<?php include_once("../rodape.php"); ?>