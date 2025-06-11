<?php
    include_once 'index4.class.php';

    $livro = new livro("a volta dos que não foram", "max headwell da silva", true);
    $livro->mostrarDados();
    $livro->emprestar();
    $livro->exibirStatus();
    $livro->devolver();
    $livro->exibirStatus();
?>