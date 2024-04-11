<?php 

class Produto {
    private string $nome;
    private float $preco;

    public function __construct(string $nome, float $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }
    public function getNome(): string{
        return $this->nome;
    }
    public function getPreco(): float {
        return $this->preco;
    }
}
class Estatisticas {
    public array $produtos;

    public function __construct(array $produtos) {
        $this->produtos = $produtos;
    }
    
    public function getInferior(): array {
        return array_filter($this->produtos, function($produto) {
            return $produto->preco < 50;
        });
    }

    public function getEntre(): array {
        return array_filter($this->produtos, function($produto){
            return $produto->preco >= 50 && $produto->preco <= 100;
        });
    }

    public function getSuperior(): array {
        return array_filter($this->produtos, function($produto){
            return $produto->preco > 100;
        });
    }

    public function calcMedia(array $produtos): float {
        $soma = array_sum($produtos);
        $qtde = count($produtos);
        if ($qtde > 0) {
            return $soma / $qtde;
        } else {
            return 0;
        }
    }
}