<?php 
    class Livro{
        public $título;
        public $autor;
        public $númeroPáginas;
        public $anoPublicação; 
    }

    $LivroI = new Livro();

    $LivroI->título = "Harry Potter e a Pedra Filosofal";
    $LivroI->autor = "J.K. Rowling";
    $LivroI->númeroPáginas = "256";
    $LivroI->anoPublicação = "1997";

    echo "O livro tem o título " . $LivroI->título . "<br>";
    echo "O livro tem o autor " . $LivroI->autor . "<br>";
    echo "O livro tem " . $LivroI->númeroPáginas . "<br>";
    echo "O livro tem " . $LivroI->anoPublicação . "<br><br>";

    $LivroII = new Livro();

    $LivroII->título = "O Hobbit";
    $LivroII->autor = "J.R.R. Tolkien";
    $LivroII->númeroPáginas = "310";
    $LivroII->anoPublicação = "1937";

    echo "O livro tem o título " . $LivroII->título . "<br>";
    echo "O livro tem o autor " . $LivroII->autor . "<br>";
    echo "O livro tem " . $LivroII->númeroPáginas . "<br>";
    echo "O livro tem " . $LivroII->anoPublicação . "<br>";

?>