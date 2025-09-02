<?php
    include 'pedaco.php';
    $id = $_GET['id'];
?>

    <div class="container">
        <form action="atualiza.php?id=<?php echo $id ?>" method="POST">

            <?php
                $id=$_GET['id'];
                //echo"valor passado:$id";
            
            require 'conexao.php';
            $sql = "SELECT * FROM produtos where id=$id";
            $stmt = $pdo->query($sql);
            $produto = $stmt->fetch(PDO::FETCH_ASSOC);

            ?> 

            <div class="mb-3">
                nome: <input type="text" value="<?php echo $produto['nome']; ?>" class="form-control" name="nome_novo" >                
            </div>
            <div class="mb-3">
                preco: <input type="text" value="<?php echo $produto['preco']; ?>" class="form-control" name="preco_novo" >                
            </div>
            <div class="mb-3">
                quantidade: <input type="text" value="<?php echo $produto['quantidade']; ?>" class="form-control" name="quantidade_novo" >                
            </div>
            
            <button type="submit" class="btn btn-primary">atualizar</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>