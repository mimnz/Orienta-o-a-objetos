<?php

// Classe Base (Superclasse)
class Veiculo {
    protected string $modelo;
    protected float $velocidadeMax; // Usando float para mais flexibilidade
    protected string $cor;

    public function __construct(string $modelo, float $velocidadeMax, string $cor) {
        $this->modelo = $modelo;
        $this->velocidadeMax = $velocidadeMax;
        $this->cor = $cor;
    }

    // Método para retornar os dados básicos do veículo
    public function getDados(): string {
        return "Modelo: {$this->modelo} | Velocidade Máxima: {$this->velocidadeMax} km/h | Cor: {$this->cor}";
    }
}

require_once 'CarroPasseio.php';
require_once 'Caminhao.php';
require_once 'Onibus.php';

// --- Criação e Teste dos Objetos ---

echo "--- Dados dos Veículos ---\n\n";

// 1. Cria o objeto CarroPasseio
$carro = new CarroPasseio("Fiat Uno", 150.0, "Vermelho", 5);
echo "Carro de Passeio:\n";
echo $carro->getDados() . "\n";
echo str_repeat("-", 40) . "\n";

// 2. Cria o objeto Caminhao
$caminhao = new Caminhao("Volvo FH16", 90.0, "Azul", 40.0, 4.0);
echo "Caminhão:\n";
echo $caminhao->getDados() . "\n";
echo str_repeat("-", 40) . "\n";

// 3. Cria o objeto Onibus
$onibus = new Onibus("Marcopolo Paradiso", 100.0, "Branco", 46, 18.0);
echo "Ônibus:\n";
echo $onibus->getDados() . "\n";
