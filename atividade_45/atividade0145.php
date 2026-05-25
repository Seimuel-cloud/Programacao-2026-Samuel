<?php
    class Funcionario{
        private $nome;
        private $idade;
        private $salario;

        public function setNome($nome){
            if ($nome !== "") {
                $this->nome = $nome;
            } else {
                echo "Erro: o nome não pode ser vazio.<br>";
            }
        }

        public function getNome(){
            return $this->nome;
        }

        public function setIdade($idade){
            if ($idade >= 0 && $idade <= 120) {
                $this->idade = $idade;
            } else {
                echo "Erro: idade inválida.<br>";
            }
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setSalario($salario){
            if ($salario > 0) {
                $this->salario = $salario;
            } else {
                echo "Erro: salário deve ser maior que 0.<br>";
            }
        }

        public function getSalario(){
            return $this->salario;
        }
    }

    $funcionario = new Funcionario();
    $funcionario->setNome("Carlos");
    $funcionario->setIdade(30);
    $funcionario->setSalario(3500);

    echo "<b>" . $funcionario->getNome() . "</b><br>";
    echo "<b>" . $funcionario->getIdade() . "</b><br>";
    echo "<b>R$" . $funcionario->getSalario() . ",00</b>";
?>