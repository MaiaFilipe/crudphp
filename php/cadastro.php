<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Cadastrar usuário</title>
    <style>
        h2 {
            color: #80a2ff;
            text-shadow: 1px 1px 1px black;
        }
    </style>
</head>
<body>
    <h1>Cadastro do usuário!</h1>
    <form method="POST" action="cadastro_code.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <br><br> 

        <label for="email">Email:</label>
        <input type="email" name="email">
        <br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone">
        <br><br>

        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco">
        <br><br>

        <label for="data">Data de nascimento:</label>
        <input type="date" name="dt_nascimento">
        <br><br>

        <input type="submit" value="Enviar">
             
    </form>
    <?php 
    ?>
    <br>
    <a href="index.php" type="button">Início</a>
</body>
</html>