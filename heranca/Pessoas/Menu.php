<?php

//Decidi colocar JSON pra salvar os dados das pessoas cadastradas

// Define o nome do arquivo JSON
define('ARQUIVO_DADOS', 'pessoas.json');

/**
 * Carrega a lista de pessoas do arquivo JSON.
 * Se o arquivo não existir ou estiver vazio, retorna uma array vazia.
 *
 * @return array Lista de objetos Pessoa (Fisica ou Juridica).
 */

function carregarPessoas(): array {
    if (!file_exists(ARQUIVO_DADOS) || filesize(ARQUIVO_DADOS) === 0) {
        return [];
    }
    
    $json = file_get_contents(ARQUIVO_DADOS);
    $dados = json_decode($json, true);
    
    $listaPessoas = [];
    foreach ($dados as $dado) {
        // Usa o atributo 'tipo' que salvamos para instanciar a classe correta
        if ($dado['tipo'] === 'Fisica') {
            $listaPessoas[] = new PessoaFisica(
                $dado['nome'], 
                $dado['cpf'], 
                $dado['idade']
            );
        } elseif ($dado['tipo'] === 'Juridica') {
            $listaPessoas[] = new PessoaJuridica(
                $dado['nome'], 
                $dado['nomeFantasia'], 
                $dado['cnpj']
            );
        }
    }
    return $listaPessoas;
}

/**
 * Converte a lista de objetos Pessoa para uma array e salva no JSON.
 *
 * @param array $listaPessoas Lista de objetos Pessoa.
 */

function salvarPessoas(array $listaPessoas): void {
    $dadosParaSalvar = [];

    foreach ($listaPessoas as $pessoa) {
        $dados = [
            'nome' => $pessoa->getNome()
        ];

        if ($pessoa instanceof PessoaFisica) {
            $dados['tipo'] = 'Fisica';
            $dados['idade'] = $pessoa->getIdade();
            $dados['cpf'] = $pessoa->getCpf();
        } elseif ($pessoa instanceof PessoaJuridica) {
            $dados['tipo'] = 'Juridica';
            $dados['nomeFantasia'] = $pessoa->getNomeFantasia();
            $dados['cnpj'] = $pessoa->getCnpj();
        }
        $dadosParaSalvar[] = $dados;
    }

    $json = json_encode($dadosParaSalvar, JSON_PRETTY_PRINT);
    file_put_contents(ARQUIVO_DADOS, $json);
}

function cadastrarPessoaFisica(array &$listaPessoas): void {
    system('clear');
    echo "\n--- Cadastro Pessoa Física ---\n";
    $nome = trim(readline("Nome: "));
    $idade = (int)trim(readline("Idade: "));
    $cpf = trim(readline("CPF: "));

    $pessoa = new PessoaFisica($nome, $cpf, $idade);
    $listaPessoas[] = $pessoa;
    salvarPessoas($listaPessoas); // Salva após o cadastro
    echo "Pessoa Física cadastrada com sucesso!\n";
    sleep(1);
}

function cadastrarPessoaJuridica(array &$listaPessoas): void {
    system('clear');
    echo "\n--- Cadastro Pessoa Jurídica ---\n";
    $razaoSocial = trim(readline("Razão Social: "));
    $nomeFantasia = trim(readline("Nome Fantasia: "));
    $cnpj = trim(readline("CNPJ: "));

    $pessoa = new PessoaJuridica($razaoSocial, $nomeFantasia, $cnpj);
    $listaPessoas[] = $pessoa;
    salvarPessoas($listaPessoas); // Salva após o cadastro
    echo "Pessoa Jurídica cadastrada com sucesso!\n";
    sleep(1);
}

function listarPessoas(array $listaPessoas): void {
    // ... (restante da função listarPessoas, inalterada)
    system('clear');
    echo "\n--- Lista de Pessoas Cadastradas ---\n";

    if (empty($listaPessoas)) {
        echo "Nenhuma pessoa cadastrada.\n";
    }

    foreach ($listaPessoas as $indice => $pessoa) {
        echo "[{$indice}] ";
        $pessoa->exibir();
    }
    
    echo "\nPressione 'ENTER' para voltar ao menu.";
    trim(fgets(STDIN));
}

function excluirPessoa(array &$listaPessoas): void {
    system('clear');
    if (empty($listaPessoas)) {
        echo "A lista de pessoas está vazia. Nada para excluir.\n";
        sleep(2);
        return;
    }

    listarPessoas($listaPessoas);
    echo "\n";
    $indice = (int)trim(readline("Digite o índice (número) da pessoa a ser excluída: "));

    if (isset($listaPessoas[$indice])) {
        $nome = $listaPessoas[$indice]->getNome();
        unset($listaPessoas[$indice]);
        $listaPessoas = array_values($listaPessoas); 
        salvarPessoas($listaPessoas); // Salva após a exclusão
        system('clear');
        echo "Pessoa '{$nome}' excluída com sucesso!\n";
    } else {
        echo "Índice inválido. Tente novamente.\n";
    }
    sleep(2);
}

function menuPrincipal(): void {
    // Carrega os dados salvos no início do programa
    $listaPessoas = carregarPessoas();

    while (true) {
        system('clear');
        echo "___________________________________________\n\n";
        echo "             --- MENU DE CADASTRO ---\n\n";
        echo "(1) Cadastrar pessoa física\n";
        echo "(2) Cadastrar pessoa jurídica (empresa)\n";
        echo "(3) Listar todas as pessoas\n";
        echo "(4) Excluir pessoa por índice\n";
        echo "(0) Sair\n";
        echo "___________________________________________\n";
        
        $opcao = trim(fgets(STDIN));

        switch ($opcao) {
            case '1':
                cadastrarPessoaFisica($listaPessoas);
                break;
            case '2':
                cadastrarPessoaJuridica($listaPessoas);
                break;
            case '3':
                listarPessoas($listaPessoas);
                break;
            case '4':
                excluirPessoa($listaPessoas);
                break;
            case '0':
                // Não precisa salvar aqui, pois já salvamos em cada alteração
                system('clear');
                echo "Programa encerrado. Dados salvos em " . ARQUIVO_DADOS . "\n";
                return;
            default:
                echo "Opção inválida. Tente novamente.\n";
                sleep(2);
                break;
        }
    }
}