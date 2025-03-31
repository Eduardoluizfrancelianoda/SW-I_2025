<!DOCTYPE html>
<html>
<head>
    <title>Tabela de Produtos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th {
            background-color: #333;
            color: white;
            padding: 12px;
            text-align: left;
        }
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        .eletronicos { background-color: #ffe6e6; }
        .vestuario { background-color: #e6ffe6; }
        .alimentos { background-color: #e6f3ff; }
        .cosmeticos { background-color: #fff0e6; }
    </style>
</head>
<body>
    <?php
    // Array associativo de produtos
    $produtos = array(
        array("Nome" => "Notebook", "Preço" => "R$ 3.499,00", "Categoria" => "eletronicos"),
        array("Nome" => "Camisa Polo", "Preço" => "R$ 89,90", "Categoria" => "vestuario"),
        array("Nome" => "Arroz Integral", "Preço" => "R$ 8,50", "Categoria" => "alimentos"),
        array("Nome" => "Perfume", "Preço" => "R$ 199,90", "Categoria" => "cosmeticos"),
        array("Nome" => "Smartphone", "Preço" => "R$ 1.799,00", "Categoria" => "eletronicos"),
        array("Nome" => "Calça Jeans", "Preço" => "R$ 120,00", "Categoria" => "vestuario")
    );

    // Mapeamento de cores para categorias
    $coresCategorias = array(
        "eletronicos" => "eletronicos",
        "vestuario" => "vestuario",
        "alimentos" => "alimentos",
        "cosmeticos" => "cosmeticos"
    );
    ?>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
                <tr class="<?php echo $coresCategorias[$produto['Categoria']]; ?>">
                    <td><?php echo $produto['Nome']; ?></td>
                    <td><?php echo $produto['Preço']; ?></td>
                    <td><?php echo ucfirst($produto['Categoria']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>