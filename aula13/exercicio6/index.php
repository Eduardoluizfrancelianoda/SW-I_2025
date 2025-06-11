<?php
    include_once 'index.class.php';

    $funcionario = new funcionario("edu", 1500);
    $funcionario-> exibirInformacoes();
    $funcionario-> aumentarSalario(30);
    $funcionario-> exibirInformacoes();
?>