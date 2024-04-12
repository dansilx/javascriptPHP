<?php 
class Aluno {

    private string $nome;
    private float $nota1;
    private float $nota2;
    private float $media;

    public function __construct(string $nome, float $nota1, float $nota2) {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function calcMedia():float {
        return ($this->nota1 + $this->nota2) / 2;
    }
}