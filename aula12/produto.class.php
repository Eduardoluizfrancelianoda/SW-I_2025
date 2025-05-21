<?php
    class Produto{
        private $Nome;
        private $Preco;
        private $Qtde;

        //construção
        public function __construct($nome, $preco, $qtde){
            $this->Nome = $nome;
            $this->Preco = $preco;
            $this->Qtde = $qtde;
        }
        //getters
        public function getNome(){
            return $this->Nome;
        }

        public function getPreco(){
            return $this->Preco;
        }
        //setters
        public function setPreco(){
            return $this->Preco;
            
        }
        public function setNome(){
            $this->Nome = $nome;
        }
        //outras funções
        public function adicionarEstoque($qtde){
           if ($qtde >= 0){
            $this->Qtde += $qtde;
           } 
        }

        public function removerEstoque($qtde){
            if($qtde < $this->Qtde){
                $this->$Qtde -= $qtde;
            }else{
                echo "saque não autorizado. <br>";
            }
        }

        public function mostrarDetalhes(){
            echo $Nome. "<br>";
            echo $Preco. "<br>";
            echo $Qtde. "<br>";
        }
    }


?>