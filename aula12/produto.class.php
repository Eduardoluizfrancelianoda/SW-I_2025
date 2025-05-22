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
        public function setPreco($preco){
            $this->Preco= $preco;
            
        }
        public function setNome($nome){
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
                $this->Qtde -= $qtde;
            }else{
                echo "saque não autorizado. <br>";
            }
        }

        public function mostrarDetalhes(){
            echo $this->Nome. "<br>";
            echo $this->Preco. "<br>";
            echo $this->Qtde. "<br>";
        }
    }


?>