<?php

class PessoaJuridica extends Pessoa {
    private string $nomeFantasia;
    private string $cnpj;

    public function __construct(string $nome, string $nomeFantasia, string $cnpj) {
        parent::__construct($nome);
        $this->nomeFantasia = $nomeFantasia;
        $this->cnpj = $cnpj;
    }

    public function getNomeFantasia(): string {
        return $this->nomeFantasia;
    }

    public function getCnpj(): string {
        return $this->cnpj;
    }

    // Sobrescreve o método para exibir os dados específicos
    public function exibir(): void {
        parent::exibir();
        echo " | Jurídica - Nome fantasia: {$this->nomeFantasia} - CNPJ: {$this->cnpj}\n";
    }
}