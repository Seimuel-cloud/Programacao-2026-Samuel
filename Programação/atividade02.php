<?php
    class Funcionario{
        public $nome;
        public $cargo;
        public $salário;
        public $dataAdmissão; 
    }
    $FuncionarioI= new Funcionario();

    $FuncionarioI->nome="Alita";
    $FuncionarioI->cargo="Gerente";
    $FuncionarioI->salário="8000";
    $FuncionarioI->dataAdmissão="2020-01-01";
    $FuncionarioI->salarioAnual=($FuncionarioI->salário * 12);

    echo "O funcionário tem o nome " . $FuncionarioI->nome."<br>";
    echo "O funcionário tem o cargo " . $FuncionarioI->cargo." <br>";
    echo "O funcionário tem o salário " . $FuncionarioI->salário."<br>";
    echo "O funcionário tem a data de admissão " . $FuncionarioI->dataAdmissão . "<br>";
    echo "O funcionário tem o salário anual " . $FuncionarioI->salarioAnual . " <br><br>";

    $FuncionarioII= new Funcionario();

    $FuncionarioII->nome="Maria";
    $FuncionarioII->cargo="Assistente";
    $FuncionarioII->salário="3000";
    $FuncionarioII->dataAdmissão="2021-01-01";
    $FuncionarioII->salarioAnual=($FuncionarioII->salário * 12);

    echo "O funcionário tem o nome " . $FuncionarioII->nome."<br>";
    echo "O funcionário tem o cargo " . $FuncionarioII->cargo." <br>";
    echo "O funcionário tem o salário " . $FuncionarioII->salário."<br>";
    echo "O funcionário tem a data de admissão " . $FuncionarioII->dataAdmissão . "<br>";
    echo "O funcionário tem o salário anual " . $FuncionarioII->salarioAnual . " <br><br>";
?>