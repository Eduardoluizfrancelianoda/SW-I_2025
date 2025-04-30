<?php 
    include_once 'pessoa.class.php';

    //criar um objeto - instancia da classe Pessoa
    $fulano = new Pessoa();
    $ciclano = new Pessoa();

    //var_dump($fulano);

    //atribuir valores
    $fulano->Nome = "Fulano Da Silva";
    $fulano->Peso = 90;
    $fulano->Altura = 1.82;

    $ciclano->Nome = "Ciclano Da Silva";
    $ciclano->Peso = 190;
    $ciclano->Altura = 1.62;

    // Chamando um Método da classe pessoa
    $fulano->MostrarDados();
    $ciclano->ApresentarDados();
?>