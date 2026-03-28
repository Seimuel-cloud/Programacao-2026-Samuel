<?php 
    class Aluno{
        public $nome;
        public $matricula;
        public $mediaNota;
        public $situacao;

        public function Situação($mediaNota) {
            if ($mediaNota >= 7) {
                echo "Situação: Aprovado";
            } elseif ($mediaNota < 1.7) {
                echo "Situação: Reprovado";
            } else {
                echo "Situação: Em exame";
            }
        }
    }
    $AlunoI= new Aluno();

    $AlunoI->nome="João";
    $AlunoI->matricula="2026305295";
    $AlunoI->mediaNota="8.5";

    echo "O aluno tem o nome " . $AlunoI->nome."<br>";
    echo "O aluno tem a número da matrícula " . $AlunoI->matricula." <br>";
    echo "O aluno tem a média de notas " . $AlunoI->mediaNota."<br>";
    $AlunoI->Situação($AlunoI->mediaNota);
    echo " <br><br>";

    $AlunoII= new Aluno();

    $AlunoII->nome="Maria";
    $AlunoII->matricula="2026305691";
    $AlunoII->mediaNota="6.0";

    echo "O aluno tem o nome " . $AlunoII->nome."<br>";
    echo "O aluno tem a número da matrícula " . $AlunoII->matricula." <br>";
    echo "O aluno tem a média de notas " . $AlunoII->mediaNota."<br>";
    $AlunoII->Situação($AlunoII->mediaNota);
    echo " <br><br>";

    $AlunoIII= new Aluno();

    $AlunoIII->nome="Pedro";
    $AlunoIII->matricula="2026305897";
    $AlunoIII->mediaNota="1.5";

    echo "O aluno tem o nome " . $AlunoIII->nome."<br>";
    echo "O aluno tem a número da matrícula " . $AlunoIII->matricula."<br>";
    echo "O aluno tem a média de notas " . $AlunoIII->mediaNota."<br>";
    $AlunoIII->Situação($AlunoIII->mediaNota);
    echo "<br><br>";
?>