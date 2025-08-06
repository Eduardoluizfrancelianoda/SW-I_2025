<?php
    require 'conexao.php';

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $ano = $_POST['ano'];
    $autor = $_POST['autor'];
    $paginas = $_POST['paginas'];
    

    $sql = "UPDATE produtos SET 'titulo = :titulo', genero=':genero', ano=':ano', autor=':autor', paginas=':paginas' WHERE id = :id";
    
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "Produto atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar produto.";
    }
?>