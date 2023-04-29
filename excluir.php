<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_excluir.css">
        <title>Conta Deletada</title>
    </head>
    <body>
    <?php
        include("banco_dados_conexao.php");	
        
        try {
            $stmt = $dbh->prepare("delete from register where usuario= ?");
            $stmt->bindParam(1, $_GET["usuario"]);
            if($stmt->execute())
                echo "Exclusão realizada com sucesso!";

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
        }
    ?>  

    <br><br><a href="login.php">Voltar</a>

    </body>
</html>