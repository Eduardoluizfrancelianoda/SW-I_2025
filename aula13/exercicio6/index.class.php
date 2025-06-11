<?php
    class retangulo{
        private $largura;
        private $altura;


        //getters
        public function getLargura(){
            return $this->largura;
        }
        public function getAltura(){
            return $this->altura;
        }
        //setters
        public function setLargura($largura){
            $this->largura = $largura;
        }
        public function setAltura($altura){
            $this->altura = $altura;
        }
        //metodos
        public function calcularArea(){
            $area = $this->altura * $this->largura;
            echo "area= ". $area. "<br>";
        }
        public function calcularPerimetro(){
            $perim = 2 * ($this->largura + $this->altura);
            echo "perimetro= ". $perim. "<br>";
        }
    }
?>