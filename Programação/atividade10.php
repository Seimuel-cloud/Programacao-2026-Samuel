<?php 
    class Produto{
        public $nomeProduto;
        public $valorProduto;
        public $quantidadeProduto;

        public function Produto($nomeProduto, $valorProduto, $quantidadeProduto){
            echo "O produto é " . $nomeProduto . "<br>";
            echo "O valor do " . $nomeProduto . " é R$ " . $valorProduto . "<br>";
            echo "A quantidade do " . $nomeProduto . " é " . $quantidadeProduto . " unidades <br>";
        }
        public function Adicionar($nomeProduto, $quantidadeProduto, $quantidade){
            echo "Adicionado " . ($quantidade) . " unidades de " . $nomeProduto . " <br> Total de " . ($quantidadeProduto + $quantidade) . " unidades de " . $nomeProduto . " <br><br>";
        }
        public function Remover($nomeProduto, $quantidadeProduto, $quantidade){
            echo "Removido ". ($quantidade) . " unidades de " . $nomeProduto . " <br> Total de " . ($quantidadeProduto - $quantidade) . " unidades de " . $nomeProduto . " <br><br>";
        }
    }
    $ProdutoI= new Produto();

    $ProdutoI->nomeProduto="Alvejante";
    $ProdutoI->valorProduto="50.00";
    $ProdutoI->quantidadeProduto="10";

    $ProdutoI->Produto($ProdutoI->nomeProduto, $ProdutoI->valorProduto, $ProdutoI->quantidadeProduto);
    $ProdutoI->Adicionar($ProdutoI->nomeProduto, $ProdutoI->quantidadeProduto, 5);

    $ProdutoII= new Produto();

    $ProdutoII->nomeProduto="Sabão em pó";
    $ProdutoII->valorProduto="70.00";
    $ProdutoII->quantidadeProduto="20";

    $ProdutoII->Produto($ProdutoII->nomeProduto, $ProdutoII->valorProduto, $ProdutoII->quantidadeProduto);
    $ProdutoII->Remover($ProdutoII->nomeProduto, $ProdutoII->quantidadeProduto, 10);
?>