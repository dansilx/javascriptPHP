<?php 

    $nome = $_POST['nome'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $objeto = new Person($nome, $peso, $altura);
    $imc = $objeto->calcularIMC();
    $definir = $objeto->definirIMC();

    echo "{$nome} seu IMC é " . number_format($imc , 2)."<br>".$definir;
        
    class Person {
        private $nome;
        private $peso;
        private $altura;

        public function __construct($nome, $peso, $altura) {
            $this->nome = $nome;
            $this->peso = $peso;
            $this->altura = $altura;
        }
        public function calcularIMC() {
            return $this->peso / ($this->altura ** 2);
        }

        public function definirIMC() {
            $imc = $this->calcularIMC();
            if ($imc <18.5) {
                return "Você está abaixo do peso";
            } elseif ($imc >= 18.5 && $imc < 24.9){
                return "Seu peso está normal";
            } elseif ($imc >= 24.9 && $imc < 29.9) {
                return "Você possui um sobrepeso";
            } else {
                return "Obesidade. Você está acima do peso";
            }
        }
    }