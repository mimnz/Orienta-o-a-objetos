<?php

class Caminhao extends Veiculo {
    private float $qtdCarga; // Usando float para a quantidade de carga (toneladas, kg)
    private float $altura;

    public function __construct(string $modelo, float $velocidadeMax, string $cor, float $qtdCarga, float $altura) {
        // Chama o construtor da classe base (Veiculo)
        parent::__construct($modelo, $velocidadeMax, $cor);
        $this->qtdCarga = $qtdCarga;
        $this->altura = $altura;
    }

    // Sobrescreve e estende o método getDados() da classe base
    public function getDados(): string {
        $dadosBase = parent::getDados();
        return $dadosBase . " | Quantidade de Carga (t): {$this->qtdCarga} | Altura (m): {$this->altura}";
    }
}