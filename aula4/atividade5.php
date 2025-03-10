<?php
$cor = isset($_POST["cxcor"]) ? $_POST["cxcor"] : "white"; // Cor padrão: branco
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $cor; ?>;">
    <p>Crie um formulário onde o usuário seleciona uma cor em um input color e que altere a
        cor de fundo da página.        
        </p>

    <form action="atividade5.php" method="post">

        <label for="cor">cor:</label>
        <select id="$cor" name="cxcor">
            <option value="">Selecione...</option>
            <option value="tomato">tomato</option>
            <option value="orange">orange</option>
            <option value="dodgerblue">dodgerblue</option>
            <option value="mediumseagreen">mediumseagreen</option>
            <option value="gray">gray</option>
            <option value="slateblue">slateblue</option>
            <option value="violet">violet</option>
            <option value="lightgray">lightgray</option>
        </select>
        <input type="submit" value="enviar">
    </form>

</body>
</html>