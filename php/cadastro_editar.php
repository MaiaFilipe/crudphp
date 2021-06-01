<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Alteração do cadastro</title>
    <style>
        h2 {
            color: #80a2ff;
            text-shadow: 1px 1px 1px black;
        }
    </style>
</head>
<body>

    <?php

    include "conexao.php";

    $id = $_GET['id'] ?? '';

    $sql = "SELECT * FROM usuario WHERE cod_usuario = $id";

    $dados = mysqli_query($com, $sql);

    $linha = mysqli_fetch_assoc($dados);

    ?>

    <h1>Alteração do cadastro</h1>
    <form method="POST" action="cadastro_editar_code.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required value="<?php echo $linha['nome'];?>">
        <br><br> 

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $linha['email'];?>">
        <br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" value="<?php echo $linha['telefone'];?>">
        <br><br>

        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" value="<?php echo $linha['endereco'];?>">
        <br><br>

        <label for="data">Data de nascimento:</label>
        <input type="date" name="dt_nascimento" value="<?php echo $linha['dt_nascimento'];?>">
        <br><br>

        <input type="submit" value="Salvar alteração">
        <input type="hidden" name="id" value="<?php echo $linha['cod_usuario'];?>">
             
    </form>
    <?php 
    ?>
    <br>
    <a href="index.php" type="button">Início</a>
</body>
</html>