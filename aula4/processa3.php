<?php 
$email = $_POST["cxemail"] ?? "";
$password = $_POST["cxpassword"] ?? "";

if (empty($email) || empty($password)) {
    echo "Por favor, preencha todos os campos!";
} elseif ($email === "etec" && $password === "informatica") {
    echo "Logado com sucesso!";
} else {
    echo "Login ou senha incorretos!";
}

?>
