<?php
    $nuno= $_GET['cxn1'];
    $ndos= $_GET['cxn2'];
    $ntres= $_GET['cxn3'];

    if (!empty($_GET['cxn1']) && !empty($_GET['cxn2']) && !empty($_GET['cxn3'])) {
        $nuno = $_GET['cxn1'];
        $ndos = $_GET['cxn2'];
        $ntres = $_GET['cxn3'];

        $maior = $nuno;
        if ($ndos > $maior) {
            $maior = $ndos;
        }
        if ($ntres > $maior) {
            $maior = $ntres;
        }

        echo "<h2>O maior número é: $maior</h2>";
    } else {
        echo "<h2 style='color: red;'>Por favor, preencha todos os campos!</h2>";
    }
?>