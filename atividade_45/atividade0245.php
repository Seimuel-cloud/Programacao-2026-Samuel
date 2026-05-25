<?php
    class Funcionario{
        private $nome;
        private $idade;
        private $salario;

        public function setNome($nome){
            if ($nome !== "") {
                $this->nome = $nome;
            } else {
                echo "Erro: O nome não pode ser vazio!<br>";
            }
        }

        public function getNome(){
            return $this->nome;
        }

        public function setIdade($idade){
            if ($idade >= 0) {
                $this->idade = $idade;
            } else {
                echo "Erro: A idade não pode ser negativa ($idade)!<br>";
            }
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setSalario($salario){
            if ($salario > 0) {
                $this->salario = $salario;
            } else {
                echo "Erro: O salário deve ser maior que zero!<br>";
            }
        }

        public function getSalario(){
            return $this->salario;
        }
}
    $func = new Funcionario();

    echo "<b>1. Testando Nome Vazio:</b><br>";
    $func->setNome(""); 

    echo "<br><b>2. Testando Idade Negativa:</b><br>";
    $func->setIdade(-5); 

    echo "<br><b>3. Testando Salário Zero:</b><br>";
    $func->setSalario(0); 

    echo "<br>----------------------------<br>";

    echo "<b>4. Cadastro com Valores Válidos:</b><br>";
    $func->setNome("Ana Silva");
    $func->setIdade(25);
    $func->setSalario(2800);

    echo "Funcionário: " . $func->getNome() . "<br>";
    echo "Idade: " . $func->getIdade() . " anos<br>";
    echo "Salário: R$ " . $func->getSalario() . "<br>";
?>