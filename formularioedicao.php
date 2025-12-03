<?php if ($editando): ?>

<h2>Editar Hambúrguer</h2>

<form method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_hamburguer" value="<?= $editando['id_hamburguer'] ?>">

    Tipo do Hambúrguer:<br>
    <input type="text" name="TipodoHamburguer" 
           value="<?= $editando['TipodoHamburguer'] ?>" required><br><br>

    Valor do Hambúrguer:<br>
    <input type="number" step="0.01" 
           name="valorDoHamburguer"
           value="<?= $editando['valorDoHamburguer'] ?>" required><br><br>

    <button type="submit">Salvar alterações</button>
</form>

<?php endif; ?>
