<?php

class Pessoa {
    protected string $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }
    
    // Método abstrato para forçar a implementação nas classes filhas
    public function exibir(): void {
        echo "Nome: " . $this->nome;
    }
}
