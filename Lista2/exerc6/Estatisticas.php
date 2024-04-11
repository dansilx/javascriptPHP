<?php 
    class Estatisticas {
        public array $produtos;

        public function __construct(array $produtos) {
            $this->produtos = $produtos;
        }
        
        public function getInferior(): array {
            return array_filter($this->produtos, function($produto) {
                return $produto->getPreco() < 50;
            });
        }

        public function getEntre(): array {
            return array_filter($this->produtos, function($produto){
                return $produto->getPreco() >= 50 && $produto->getPreco() <= 100;
            });
        }

        public function getSuperior(): array {
            return array_filter($this->produtos, function($produto){
                return $produto->getPreco() > 100;
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