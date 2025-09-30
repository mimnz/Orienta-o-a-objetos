<?php

class Onibus extends Veiculo {
    private int $qtdPassageiros;
    private float $pesoMax; // Usando float para o peso máximo

    public function __construct(string $modelo, float $velocidadeMax, string $cor, int $qtdPassageiros, float $pesoMax) {
        // Chama o construtor da classe base (Veiculo)
        parent::__construct($modelo, $velocidadeMax, $cor);
        $this->qtdPassageiros = $qtdPassageiros;
        $this->pesoMax = $pesoMax;
    }

    // Sobrescreve e estende o método getDados() da classe base
    public function getDados(): string {
        $dadosBase = parent::getDados();
        return $dadosBase . " | Quantidade de Passageiros: {$this->qtdPassageiros} | Peso Máximo (t): {$this->pesoMax}";
    }
}
