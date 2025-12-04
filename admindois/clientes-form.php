<?php

    require_once 'config.inc.php';

    $id_cliente = $_GET['id_cliente'];
    $sql = "SELECT * FROM clientes WHERE id_cliente = '$id_cliente'";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            $id_cliente = $dados['id_cliente'];
            $nome_cliente = $dados['nome_cliente'];
            $numero_contato = $dados['endereco'];
            $endereco = $dados['endereco'];


        }
?>

<h2>Cadastro de Cliente</h2>
<form action="?pg=clientes-alterar" method="post">
    <input type="hidden" name="id_cliente" value="<?=$id_cliente?>">

    <label>Nome:</label>
    <input type="text" name="nome_cliente" value="<?=$nome?>"><br>
    <label>Telefone:</label>
    <input type="text" name="numero_contato" value="<?=$numero_contato?>"><br>
    <label>Endereço:</label>
    <input type="text" name="endereco" value="<?=$endereco?>"><br>
    <input type="submit" value="Cadastrar nome_cliente">

</form>

<?php
    }else{
        echo "<h2>Nenhum cliente encontrado!!</h2>";
    }
?>
