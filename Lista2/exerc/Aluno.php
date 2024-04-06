<?php

class Aluno {
    private array $nome = [];
    private array $nota = [];

    private float $media;

    public function __construct($nome, $nota) {
        $this->nome = $nome;
        $this->nota = $nota;        
    }

    public function calcMedia() {
        $this->media = array_sum($this->nota) / count($this->nota);
        return $this->media;
    }

    public function maiorNota() {
        sort($this->nota);
        return end($this->nota);
    }
}