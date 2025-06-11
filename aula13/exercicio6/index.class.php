<?php
    class retangulo{
        private $largura;
        private $altura;


        //getters
        public function getLargura(){}
        public function getAltura(){}
        //setters
        public function setLargura(){}
        public function setAltura(){}
        //metodos
        public function calcularArea(){
            $this->altura += $this->altura * ($porcentagem/100);
        }
        public function calcularPerimetro(){
            echo $this->largura. "<br>";
            echo $this->altura. "<br>";
        }
    }
?>