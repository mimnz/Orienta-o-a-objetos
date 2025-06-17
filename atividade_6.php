<?php
class Produto{
    private string $descricao;
    private string $unidadeMedida;
    private int $quantidade;
    private float $valorUnitario;

    public function __construct(string $descricao, string $unidadeMedida, int $quantidade, float $valorUnitario) 
    {
        $this->descricao = $descricao;
        $this->unidadeMedida = $unidadeMedida;
        $this->quantidade = $quantidade;
        $this->valorUnitario = $valorUnitario;
    }

    public function getValorTotal(): float {
        return $this->quantidade * $this->valorUnitario;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function getUnidadeMedida(): string {
        return $this->unidadeMedida;
    }

    public function exibir(): void 
    {
        echo "Produto: {$this->descricao} ({$this->unidadeMedida}) | {$this->quantidade} X " .
        number_format($this->valorUnitario, 2, ',', '.') . " = " .
        number_format($this->getValorTotal(), 2, ',', '.') . "\n";
    }
}

$produtos = [];
$maiorValorTotal = 0;
$produtoMaisCaro = null;

for ($i = 0; $i < 3; $i++) {
    echo "Produto Nº".($i + 1) . ":\n";
    $descricao = readline("Qual é o produto? ");
    $unidadeMedida = readline("Qual a unidade de medida do produto? ");
    $quantidade = readline("Qual a quantidade do produto? ");
    $valorUnitario = readline("E quanto o produto custa? ");

    $produto = new Produto($descricao, $unidadeMedida, (int)$quantidade, (float)$valorUnitario);
    $produtos[] = $produto;
    $produto->exibir();
    echo "\n";

    if ($produto->getValorTotal() > $maiorValorTotal) {
        $maiorValorTotal = $produto->getValorTotal();
        $produtoMaisCaro = $produto;
    }
}

if ($produtoMaisCaro !== null) {
    echo "Produto vendido com o maior valor total: " .
         $produtoMaisCaro->getDescricao() . " (" .
         $produtoMaisCaro->getUnidadeMedida() . ")\n";
}
