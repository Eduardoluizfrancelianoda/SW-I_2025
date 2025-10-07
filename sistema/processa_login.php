<?php
    session_start();
    include_once 'conexao.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $consulta = "SELECT * FROM usuarios where email = :email AND senha = :senha"; 
    
    $stmt = $pdo->prepare($consulta);

    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    $num_registros = $stmt->rowCount();

    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    var_dump($resultado);

    if($num_registros == 1){
        $_SESSION['id'] = $resultado['id'];
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['email'] = $resultado['email'];

        header("Location: restrita.php");

        //echo "Login realizado com sucesso";
    } else {
        //echo "Usuário ou senha inválidos";

        header("Location: login.php");
    }

?>