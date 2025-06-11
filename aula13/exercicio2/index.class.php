<?php
    class aluno{
        private $nome;
        private $nota1;
        private $nota2;
        private $media;

        public function __construct($nome,$nota1,$nota2){
            $this->nome = $nome;
            $this->nota1 = $nota1;
            $this->nota2 = $nota2;
        }

        //metodos
        public function nomeMedia(){
            $this->media= ($this->nota1 + $this->nota2)/2;
            return $this->nome;
            return $this->media;
        }
        public function verificarSituação(){
            if($this->media >= 7){
                echo "aprovado";
            }else{
                echo "reprovado";
            }
        }
        public function mostrarDados(){
            echo $this->nome. "<br>";
            echo $this->nota1. "<br>";
            echo $this->nota2. "<br>";
        }
    }
?>