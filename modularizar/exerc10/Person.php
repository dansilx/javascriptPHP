<?php  

class Person {
    private string $nome;
    private float $peso;
    private float $altura;

    private float $imc;

    public function __construct($nome, $peso, $altura) {
        $this->nome = $nome;
        $this->peso = $peso;
        $this->altura = $altura;
        
    }

    public function getPeso() {
        return $this->peso;
    }
    
    public function calcularIMC() {
        $this->imc = $this->peso / ($this->altura ** 2);
        return $this->imc;
    }

    public function definirIMC() {
        if ($this->imc <18.5) {
            return "<p class='text-white m-2 h2'>Você está abaixo do peso</p>";
        } elseif ($this->imc >= 18.5 && $this->imc < 24.9){
            return "<p class='text-white m-2 h2'>Seu peso está normal</p>";
        } elseif ($this->imc >= 24.9 && $this->imc < 29.9) {
            return "<p class='text-white m-2 h2'>Você possui um sobrepeso</p>";
        } else {
            return "<p class='text-white m-2 h2'>Obesidade. Você está acima do peso</p>";
        }
    }
}
