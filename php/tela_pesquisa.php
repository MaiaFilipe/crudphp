<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Pesquisar</title>
</head>

<?php
    
    $pesquisa = $_POST["busca"] ?? '';

    include "conexao.php";

    $sql = "SELECT * FROM usuario WHERE nome LIKE '%$pesquisa%'";

    $dados = mysqli_query($com, $sql);

    ?>


<body>
    <h2>Pesquisar usuários</h2>
    <form action="tela_pesquisa.php" method="POST">
        <input type="search" placeholder="Nome" name="busca" autofocus="">
        <button type="submit">Pesquisar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Nascimento</th>
                <th>Funções</th>
            </tr>
        </thead>
        <tbody>

    <?php 
    
        while ($linha = mysqli_fetch_assoc($dados)){
            $id = $linha["cod_usuario"];
            $nome = $linha["nome"];
            $email = $linha["email"];
            $telefone = $linha["telefone"];
            $endereco = $linha["endereco"];
            $data = $linha["dt_nascimento"];

            echo "<tr>
                    <th>$id</th>
                    <th>$nome</th>
                    <th>$email</th>
                    <th>$telefone</th>
                    <th>$endereco</th>
                    <th>$data</th>
                    <th>
                        <a href='excliur.php?id=$id'>Excluir</a>
                        <a href='cadastro_editar.php?id=$id'>Editar</a>
                    </th>
                  </tr>";
        }

    ?>
        </tbody>
    </table>
    <?php

    ?>
    <br>
    <a href="index.php">Início</a>
</body>
</html>