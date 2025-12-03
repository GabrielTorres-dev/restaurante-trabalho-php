<?php
include "conexao.php";
?>
<h2>Lista de Hambúrgueres</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Tipo</th>
        <th>Valor</th>
        <th>Ações</th>
    </tr>

    <?php while ($h = mysqli_fetch_assoc($res)): ?>
    <tr>
        <td><?= $h['id_hamburguer'] ?></td>
        <td><?= $h['TipodeHamburguer'] ?></td>
        <td>R$ <?= number_format($h['valorDoHamburguer'], 2, ',', '.') ?></td>

        <td>
            <a href="?edit=<?= $h['id_hamburguer'] ?>">Editar</a> |
            <a href="?delete=<?= $h['id_hamburguer'] ?>"
               onclick="return confirm('Tem certeza que deseja excluir?');">
               Excluir
            </a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
