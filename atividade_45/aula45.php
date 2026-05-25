<?php
    class Pessoa {
        private $nome;
        private $idade;
    
        public function setNome ($nome){ //define o dado
            $this->nome = $nome;
        }
        public function getNome (){ //pega o dado
            echo $this->nome;
        }

        public function setIdade ($idade){
            $this->idade = $idade;
        }
        public function getIdade (){
            echo $this->idade;
        }        
    }

    $p = new Pessoa();
    $p->setNome("Ana");
    $p->setIdade(-5);
    $p->getNome();
    $p->getIdade();
?>