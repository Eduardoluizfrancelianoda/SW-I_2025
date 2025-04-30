<?php
    //encapsulamento
    class Pessoa{
        //ATRIBUTOS
        public $Nome;
        public $Peso;
        public $Altura;

        //MÉTODOS
        public function MostrarDados(){
            echo "o nome é: " . $this->Nome . "<br>";
            echo "o peso é: " . $this->Peso . "<br>";
            echo "a altura é: " . $this->Altura . "<br> <hr>";

        }

        public function ApresentarDados(){
            echo "o nome é: " . $this->Nome . "<br>"."o peso é:". $this->Peso ."<br>"."a altura é:". $this->Altura ."<br> <hr>";

        }
    }
?>