<?php
    class lampada{
        public $Fabricante;
        public $Tensão;
        public $Potencia;
        public $Cor;
        public $Status;
        
        public function Ligar(){
            $this->Status=true;
        }
        public function Desligar(){
            $this->Status=false;
        }
        public function MostrarDados(){
            echo "Fabricante: " . $this->Fabricante . "<br>";
            echo "Tensão: " . $this->Tensão . "<br>";
            echo "Potencia: " . $this->Potencia . "<br>";
            echo "Cor: " . $this->Cor . "<br>";
            if ($this->Status == true){
                echo "Status: LIGADA <br>";
            }else {
                echo "Status: DESLIGADA <br>";
            }
            echo "<hr>";
        }
    }

?>