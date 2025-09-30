<?php

class PessoaFisica extends Pessoa {
    private string $cpf;
    private int $idade;

    public function __construct(string $nome, string $cpf, int $idade) {
        parent::__construct($nome);
        $this->cpf = $cpf;
        $this->idade = $idade;
    }

    public function getCpf(): string {
        return $this->cpf;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    // Sobrescreve o método para exibir os dados específicos
    public function exibir(): void {
        parent::exibir();
        echo " | Física - Idade: {$this->idade} - CPF: {$this->cpf}\n";
    }
}