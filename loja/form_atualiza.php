<?php
    include 'pedaco.php';
?>

    <div class="container">
        <form action="atualizar.php" method="POST">

            <?php
                $id=$_GET['id'];
                echo"valor passado:$id";
            ?>

            <div class="mb-3">
                nome: <input type="text" class="form-control" name="nome" >                
            </div>
            <div class="mb-3">
                preco: <input type="text" class="form-control" name="preco" >                
            </div>
            <div class="mb-3">
                quantidade: <input type="text" class="form-control" name="quantidade" >                
            </div>
            
            <button type="submit" class="btn btn-primary">atualizar</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>