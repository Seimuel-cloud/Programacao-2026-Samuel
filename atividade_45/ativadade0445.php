<?php
    class Funcionario{
        private $nome;
        private $idade;
        private $salario;

        public function setNome($nome){
            if ($nome !== "") {
                $this->nome = $nome;
            } else {
                echo "Erro: Nome inválido!<br>";
            }
        }

        public function setIdade($idade){
            if ($idade >= 0 && $idade <= 120) {
                $this->idade = $idade;
            } else {
                echo "Erro: Idade inválida!<br>";
            }
        }

        public function setSalario($valor){
            if ($valor > 0) {
                $this->salario = $valor;
            } else {
                echo "Erro: Salário inválido!<br>";
            }
        }

        public function getNome(){
            return $this->nome;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function getSalario(){
            return $this->salario;
        }

        public function exibirDados(){
            echo "<h3>Dados do Funcionário</h3>";
            
            if ($this->getNome() !== null) {
                echo "Nome: " . $this->getNome() . "<br>";
                echo "Idade: " . $this->getIdade() . " anos<br>";
                echo "Salário: R$ " . number_format($this->getSalario(), 2, ',', '.') . "<br>";
            } else {
                echo "Aviso: Funcionário ainda não possui dados cadastrados.<br>";
            }
            echo "----------------------------<br>";
        }
    }
    $func1 = new Funcionario();
    $func1->setNome("Ana Clara");
    $func1->setIdade(28);
    $func1->setSalario(4500.50);

    $func1->exibirDados();

    $func2 = new Funcionario();
    $func2->exibirDados();
?>