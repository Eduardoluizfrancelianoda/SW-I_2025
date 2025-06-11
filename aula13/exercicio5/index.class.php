<?php
    class funcionario{
        private $nome;
        private $salario;

        public function __construct($nome,$salario){
            $this->nome = $nome;
            $this->salario = $salario;
        }
        //metodos
        public function aumentarSalario($porcentagem){
            $this->salario += $this->salario * ($porcentagem/100);
        }
        public function exibirInformacoes(){
            echo $this->nome. "<br>";
            echo $this->salario. "<br>";
        }
    }
?>