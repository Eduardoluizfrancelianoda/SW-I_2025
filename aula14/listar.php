<?php
    require 'conexao.php';

    $sql = "SELECT * FROM livros";
    $stmt = $pdo->query($sql);

    while ($produto = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
        //PDO::FETCH_ASSOC --> faz com que seja retornado um array associativo
        //que será relacionado a variável $produto. Os índices deste array
        //associativo serão os nomes dos campos da tabela do banco de dados

        //Ver diferenças no uso de:
        //  fetch(PDO::FETCH_ASSOC)
        //  fetchAll(PDO::FETCH_ASSOC)


        echo "<pre>";
        print_r($produto[0]);        
         echo "ID: " . $livros['id'] . "<br>";
         echo "titulo: " . $livros['titulo'] . "<br>";
         echo "genero:" . $livros['genero'] . "<br>";
         echo "ano: " . $livros['ano'] . "<br>";
         echo "autor: " . $livros['autor'] . "<br>";
         echo "paginas: " . $livros['paginas'] . "<br><br>";
    }
?>