<!DOCTYPE html>
<html>
<head>
    <title>Tabela Dinâmica</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }
        td {
            padding: 10px;
            border: 1px solid #333;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
        }
        form {
            margin-bottom: 30px;
            padding: 15px;
            background: #f5f5f5;
            border-radius: 5px;
        }
        input[type="number"] {
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST">
            Número de Linhas: <input type="number" name="cxlinhas" min="1" required><br>
            Número de Colunas: <input type="number" name="cxcolunas" min="1" required><br>
            <button type="submit">Gerar Tabela</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validação dos dados
            $linhas = 0;
            $colunas = 0;
            
            if (isset($_POST['cxlinhas'])) {
                $linhas = (int)$_POST['cxlinhas'];
            }
            
            if (isset($_POST['cxcolunas'])) {
                $colunas = (int)$_POST['cxcolunas'];
            }

            // Verificação de valores válidos
            if ($linhas > 0 && $colunas > 0) {
                echo '<table>';
                $i = 1;
                while ($i <= $linhas) {
                    echo '<tr>';
                    $j = 1;
                    while ($j <= $colunas) {
                        echo "<td>Linha $i<br>Coluna $j</td>";
                        $j++;
                    }
                    echo '</tr>';
                    $i++;
                }
                echo '</table>';
            } else {
                echo '<p style="color: red;">Por favor, insira números válidos maiores que zero!</p>';
            }
        }
        ?>
    </div>
</body>
</html>