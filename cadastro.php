<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
	include("conexao.php");	

	try {
		$stmt = $dbh->prepare("insert into CONEXAO(GMAIL,SENHA) values (?,?);");

		$stmt->bindParam(1, $_POST["GMAIL"]);
		$stmt->bindParam(2, $_POST["SENHA"]);

		if($stmt->execute())
            echo "Cadastro realizado com sucesso!";
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage();
		die();
	}
?>  

<br><br><a href="index.html">Voltar</a>

</body>
</html>