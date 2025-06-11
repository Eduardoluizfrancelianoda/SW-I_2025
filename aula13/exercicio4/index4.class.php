<?php
    class livro{
        private $titulo;
        private $autor;
        private bool $disponivel;

        public function __construct($titulo,$autor,$disponivel){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->disponivel = $disponivel;
        }
        //metodos
        public function emprestar(){
            $this->disponivel = false;
        }
        public function devolver(){
            $this->disponivel = true;
        }
        public function exibirStatus(){
            if($this->disponivel){
                echo "disponivel <br>";
            }else{
                echo "emprestado <br>";
            }
        }
        public function mostrarDados(){
            echo $this->titulo. "<br>";
            echo $this->autor. "<br>";
        }
    }
?>