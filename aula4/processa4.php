<?php
    $nome= $_POST['cxnome'] ?? "";
    $email= $_POST['cxemail'] ?? "";
    $birth= $_POST['cxbirth'] ?? "";
    $bandeira = $_POST["cxbandeira"] ?? "";


    if (!empty($nome) && !empty($email) && !empty($birth) && !empty($bandeira)) {
        $bandeiras = [
            "visa" => "Visa",
            "mastercard" => "MasterCard",
            "elo" => "Elo",
            "amex" => "American Express",
            "hipercard" => "Hipercard"
        ];

        echo "nome: " . $nome . "<br>";
        echo "email: " . $email . "<br>";
        echo "data de nascimento: " $birth . "<br>";
        echo "bandeira de cartão de credito: " $bandeiras[$bandeira] . "<br>";
    } else {
        echo "Por favor, preencha todos os campos.";
    }

?>