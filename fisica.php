<?php
    include_once "pessoa.php";

    class Fisica extends Pessoa{
        
        private $cpf;
        
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function getCpf(){
            return $this->cpf;
        }        
    }
?>