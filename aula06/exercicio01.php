<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        td {
            padding: 10px;
            border: 1px solid #333;
        }
        tr.linha-par td {
            background-color: #e6f3ff;
        }
        tr.linha-impar td {
            background-color: #ffe6e6;
        }
    </style>
</head>
<body>
    <table>
        <?php
        for($i = 1; $i <= 8; $i++) {

            if($i % 2 == 0) {
                $classe = 'linha-par';
            } else {
                $classe = 'linha-impar';
            }
            
            echo "<tr class='$classe'>";
            
            for($j = 1; $j <= 4; $j++) {
                echo "<td>Linha $i, Coluna $j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>