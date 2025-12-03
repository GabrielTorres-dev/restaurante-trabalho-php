<?php if (!$editando): ?>

<h2>Cadastrar Hambúrguer</h2>

<form method="POST">
    <input type="hidden" name="acao" value="criar">

    Tipo do Hambúrguer:<br>
    <input type="text" name="TipodoHamburguer" required><br><br>

    Valor do Hambúrguer:<br>
    <input type="number" name="valorDoHamburguer" step="0.01" required><br><br>

    <button type="submit">Cadastrar</button>
</form>

<?php endif; ?>
