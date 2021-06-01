<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Alteração de cadastro</title>
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
        $id = $_POST["id"];

    	$nome = $_POST["nome"];
    	$endereco = $_POST["endereco"];
    	$telefone = $_POST["telefone"];
    	$email = $_POST["email"];
    	$dt_nascimento = $_POST["dt_nascimento"];	

    	/*
        $sql = "INSERT INTO `usuario`
    	(`nome`, `endereco`, `telefone`, `email`, `dt_nascimento`) 
    	VALUES ('$nome','$endereco','$telefone','$email','$dt_nascimento')";
        */

        $sql = "UPDATE `usuario` set `nome` = '$nome', `endereco` = '$endereco', `telefone` = '$telefone', `email` = '$email', `dt_nascimento` = '$dt_nascimento' WHERE cod_usuario = $id";

    	if(mysqli_query($com, $sql)){
    		echo "$nome foi alterado com sucesso";
    	} else {
    		echo "$nome não foi alterado";
    	}

    ?>

		<a href="index.php">Voltar</a>
</body>
</html>