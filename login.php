<?php
            session_start();
            include('conexao.php');
            $_SESSION['lg'] = '';
            if(isset($_POST['usuario']) && !empty($_POST['usuario'])) {
                $usuario = $_POST['Usuario'];
                $senha = $_POST['senha'];
                $stmt = "SELECT * FROM register WHERE usuario = :usuario AND senha = :senha";
                $stmt = $dbh->prepare($stmt);
                $stmt->bindValue(":usuario", $usuario);
                $stmt->bindValue(":senha", $senha);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if(!empty($result)){
                    header("Location: home2.html");
                }
                else{
                    echo "Usuario ou senha incorretos";
                }
                exit;
            }
        ?>