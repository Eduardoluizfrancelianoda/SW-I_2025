<?php
    class Conta{
        public $Nome;
        public $Cpf;
        private $saldo;

        public function Sacar($Valor){
            if ($Valor > $this->saldo){
                $resultado= "saldo insuficiente";
                return $resultado;
            }else{
                $this->saldo = $this->saldo - $Valor;
                $resultado = "saldo atualizado para R$" . $this->saldo;
                return $resultado;
            }
        }

        public function Depositar($Valor){
            $this->saldo += $Valor;
            return $this->saldo;
        }
        public function Consultarsaldo(){
            echo "Nome: " . $this->Nome . "<br>";
            echo "cpf: " . $this->Cpf . "<br>";
            echo "saldo atual R$: " . $this->saldo . "<br>";
        }
    }

?>