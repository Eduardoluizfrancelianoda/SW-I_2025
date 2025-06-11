<?php
    include_once 'index.class.php';

    $aluno = new aluno("eduardo", 2, 5);
    $aluno->mostrarDados();
    $aluno->nomeMedia();
    $aluno->verificarSituação();
?>