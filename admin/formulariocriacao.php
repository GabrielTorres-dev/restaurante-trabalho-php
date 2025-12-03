<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<h2>Cadastrar Hambúrguer</h2>

<form method="POST">
    <input type="hidden" name="acao" value="criar">

    Tipo do Hambúrguer:<br>
    <input type="text" name="TipodoHamburguer" required><br><br>

    Valor do Hambúrguer:<br>
    <input type="number" name="valorDoHamburguer" step="0.01" required><br><br>

    <button type="submit">Cadastrar</button>
</form>

<?php 
