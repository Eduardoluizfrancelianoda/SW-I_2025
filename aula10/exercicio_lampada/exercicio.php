<?php
    include_once 'lampada.class.php';

    $lamp1 = new Lampada();

    //var_dump($lamp1);

    $lamp1->Fabricante = "philips";
    $lamp1->Tensão = 110;
    $lamp1->Potencia = 50;
    $lamp1->Cor = "branca";

    $lamp1-> MostrarDados();
    $lamp1-> Desligar();
    $lamp1-> MostrarDados();

    $lamp2->Fabricante = "osram";
    $lamp2->Tensão = 220;
    $lamp2->Potencia = 30;
    $lamp2->Cor = "azul";

    $lamp2-> MostrarDados();
    $lamp2-> Ligar();
    $lamp2-> MostrarDados();
    
?>