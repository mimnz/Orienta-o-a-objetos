<?php
// Inclui todas as classes de instrumentos
require_once 'Prova.php';
require_once 'Trabalho.php';
require_once 'Participacao.php';

$instrumentosLidos = [];

function exibirMenu() {
    system('clear');
    echo "\n=================================================\n";
    echo "           Sistema de Avaliação - Menu           \n";
    echo "=================================================\n";
    echo "  1 - Adicionar Prova\n";
    echo "  2 - Adicionar Trabalho\n";
    echo "  3 - Adicionar Participação\n";
    echo "  4 - Exibir Notas Finais e Média\n";
    echo "  0 - Sair do Programa\n";
    echo "-------------------------------------------------\n";
    echo "Digite sua opção: ";
}

function lerNota(string $nomeTipo): float {
    do {
        echo "Digite a nota base para '$nomeTipo' (0 a 10): ";
        $notaLida = (float)trim(fgets(STDIN));
        
        if ($notaLida < 0 || $notaLida > 10) {
             echo "\nA nota deve ser um valor entre 0 e 10. Tente novamente.\n";
        }
    } while ($notaLida < 0 || $notaLida > 10);
    
    return $notaLida;
}

function processarInstrumento(string $nomeClasse, float $nota, array &$instrumentosLidos): void {
    // Instancia a classe correta usando o nome da classe
    $instrumento = new $nomeClasse($nota);
    $notaFinal = $instrumento->getNotaFinal();
    
    // Adiciona o instrumento à lista
    $instrumentosLidos[] = $instrumento;

    echo "\n Instrumento '{$nomeClasse}' adicionado.\n";
    echo "   Nota Base: " . number_format($nota, 2) . "\n";
    echo "   **Nota Final Calculada: " . number_format($notaFinal, 2) . "**\n";
}

function exibirResultados(array $instrumentosLidos) {
    $totalInstrumentos = count($instrumentosLidos);
    
    if ($totalInstrumentos === 0) {
        echo "\nNenhum instrumento adicionado ainda.\n";
        return;
    }
    
    system('clear');
    echo "\n=================================================\n";
    echo "             Notas Finais e Média                \n";
    echo "=================================================\n";
    
    $somaNotasFinais = 0.0;

    foreach ($instrumentosLidos as $indice => $instrumento) {
        $notaFinal = $instrumento->getNotaFinal(); 
        $somaNotasFinais += $notaFinal;

        $nomeClasse = (new ReflectionClass($instrumento))->getShortName();

        echo "Instrumento #" . ($indice + 1) . " ({$nomeClasse}): **" . number_format($notaFinal, 2) . "**\n";
    }

    $mediaFinal = $somaNotasFinais / $totalInstrumentos;

    echo "-------------------------------------------------\n";
    echo "Soma das Notas Finais: " . number_format($somaNotasFinais, 2) . "\n";
    echo "Total de Instrumentos: " . $totalInstrumentos . "\n";
    echo "-------------------------------------------------\n";
    echo "### Média Final do Aluno: **" . number_format($mediaFinal, 2) . "**\n";
    echo "=================================================\n";
}

do {
    exibirMenu();
    $opcao = (int)trim(fgets(STDIN));
    $instrumentoAdicionado = false;

    switch ($opcao) {
        case 1: // Prova
        case 2: // Trabalho
        case 3: // Participacao
            $nomeTipo = match ($opcao) {
                1 => 'Prova',
                2 => 'Trabalho',
                3 => 'Participacao',
            };
            
            $nota = lerNota($nomeTipo);
            processarInstrumento($nomeTipo, $nota, $instrumentosLidos);
            $instrumentoAdicionado = true;
            break;

        case 4: // Exibir Resultados
            exibirResultados($instrumentosLidos);
            break;
            
        case 0: // Sair
            if (!empty($instrumentosLidos)) {
                 exibirResultados($instrumentosLidos);
            }
            echo "\nSaindo...\n";
            break;
            
        default:
            echo "\nOpção inválida.\n";
            break;
    }

    if ($instrumentoAdicionado || $opcao === 4) {
        sleep(2);
    }

} while ($opcao !== 0);
