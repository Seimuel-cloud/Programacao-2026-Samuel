<?php 
    class Pessoa{
        public $Nome;
        public $Idade;
        public $Genero;

        public function calcularIdade($Nome, $Idade) {
            echo $Nome . " tem " . $Idade . " anos, equivalente a " . ($Idade * 365) . " dias ou equivalente a " . ($Idade * 12) . " meses.";
        }
        public function informacoes($Nome, $Genero) {
            echo "O nome da pessoa é " . $Nome . "<br>"; 
            echo "Do gênero  " . $Genero. "<br>";
        }
    }
    $PessoaI= new Pessoa();

    $PessoaI->Nome="João";
    $PessoaI->Idade="25";
    $PessoaI->Genero="masculino";

    $PessoaI->informacoes($PessoaI->Nome, $PessoaI->Genero);
    $PessoaI->calcularIdade($PessoaI->Nome, $PessoaI->Idade);
    echo "<br><br>";

    $PessoaII= new Pessoa();

    $PessoaII->Nome="Maria";
    $PessoaII->Idade="30";
    $PessoaII->Genero="feminino";

    $PessoaII->informacoes($PessoaII->Nome, $PessoaII->Genero);
    $PessoaII->calcularIdade($PessoaII->Nome, $PessoaII->Idade);
    echo "<br><br>";
?>