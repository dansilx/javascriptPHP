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
            return "Você está abaixo do peso";
        } elseif ($this->imc >= 18.5 && $this->imc < 24.9){
            return "Seu peso está normal";
        } elseif ($this->imc >= 24.9 && $this->imc < 29.9) {
            return "Você possui um sobrepeso";
        } else {
            return "Obesidade. Você está acima do peso";
        }
    }
}
