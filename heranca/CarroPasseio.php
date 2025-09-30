<?php

class CarroPasseio extends Veiculo {
    private int $qtdPassageiros;

    public function __construct(string $modelo, float $velocidadeMax, string $cor, int $qtdPassageiros) {
        // Chama o construtor da classe base (Veiculo)
        parent::__construct($modelo, $velocidadeMax, $cor);
        $this->qtdPassageiros = $qtdPassageiros;
    }

    // Sobrescreve e estende o método getDados() da classe base
    public function getDados(): string {
        $dadosBase = parent::getDados();
        return $dadosBase . " | Quantidade de Passageiros: {$this->qtdPassageiros}";
    }
}