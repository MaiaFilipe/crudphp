<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Cadastro</title>
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

    	$nome = $_POST["nome"];
    	$endereco = $_POST["endereco"];
    	$telefone = $_POST["telefone"];
    	$email = $_POST["email"];
    	$dt_nascimento = $_POST["dt_nascimento"];	

    	$sql = "INSERT INTO `usuario`
    	(`nome`, `endereco`, `telefone`, `email`, `dt_nascimento`) 
    	VALUES ('$nome','$endereco','$telefone','$email','$dt_nascimento')";

    	if(mysqli_query($com, $sql)){
    		echo "$nome cadastrado com sucesso";
    	} else {
    		echo "$nome não foi cadastrado";
    	}

    ?>

		<a href="index.php">Voltar</a>
</body>
</html>