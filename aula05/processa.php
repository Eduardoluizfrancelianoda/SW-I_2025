<?php
    $email= $_POST['cxemail'];
    $senha= $_POST['cxsenha'];

    if($email == "aluno@gmail.com" && $senha == "1234"){
        //manda para autorizado.php
        header('Location: painel/autorizado.php');
        // echo "autorizado";
    }else{
        //manda para naoautorizado.php
        header('Location: painel/naoautorizado.html');
        //echo "não autorizado";
    }

?>