<?php

class Carta {
    private string $nome;
    private int $num;
    private string $dica;
    private array $sinonimos;

    public function __construct(int $num, string $nome, string $dica, array $sinonimos = []) {
        $this->num = $num;
        $this->nome = $nome;
        $this->dica = $dica;
        $this->sinonimos = $sinonimos;
    }
    public function getNome(): string { return $this->nome; }
    public function getNum(): int { return $this->num; }
    public function getDica(): string { return $this->dica; }
    public function getSinonimos(): array { return $this->sinonimos; }
}

$json = '[
  {"num":0,"nome":"O Louco","dica":"Inocência, espontaneidade, aventura, irresponsabilidade.","sinonimos":["Louco"]},
  {"num":1,"nome":"O Mago","dica":"Habilidade, ação, iniciativa, manifestação.","sinonimos":["Mago"]},
  {"num":2,"nome":"A Sacerdotisa","dica":"Intuição, mistério, conhecimento oculto.","sinonimos":["A Papisa", "Sacerdotisa", "Papisa"]},
  {"num":3,"nome":"A Imperatriz","dica":"Fertilidade, abundância, nutrição.","sinonimos":["Imperatriz"]},
  {"num":4,"nome":"O Imperador","dica":"Ordem, estrutura, autoridade.","sinonimos":["Imperador"]},
  {"num":5,"nome":"O Hierofante","dica":"Tradição, ensino, espiritualidade.","sinonimos":["O Papa", "Papa", "Hierofante"]},
  {"num":6,"nome":"Os Enamorados","dica":"Escolhas, relacionamentos, dualidade.","sinonimos":["Os Amantes", "Enamorados", "Amantes"]},
  {"num":7,"nome":"O Carro","dica":"Determinação, vitória, avanço, intenção.","sinonimos":["Carro"]},
  {"num":8,"nome":"A Justiça","dica":"Equilíbrio, verdade, consequência.","sinonimos":["Justiça", "Justica", "A Justica"]},
  {"num":9,"nome":"O Eremita","dica":"Sabedoria, introspecção, busca interior.","sinonimos":["Eremita", "O Ermitão", "Ermitão", "Ermitao", "O Ermitao"]},
  {"num":10,"nome":"A Roda da Fortuna","dica":"Ciclo, destino, mudança.","sinonimos":["Roda da Fortuna", "Roda", "A Roda"]},
  {"num":11,"nome":"A Força","dica":"Coragem, autocontrole, perseverança.","sinonimos":["Força", "Forca", "A Forca"]},
  {"num":12,"nome":"O Enforcado","dica":"Sacrifício, nova perspectiva, rendição.","sinonimos":["O Pendurado", "Pendurado", "Enforcado"]},
  {"num":13,"nome":"A Morte","dica":"Transformação, fim de um ciclo, renovação.","sinonimos":["Morte"]},
  {"num":14,"nome":"A Temperança","dica":"Moderação, equilíbrio, harmonia.","sinonimos":["Temperança", "A Temperanca", "Temperanca"]},
  {"num":15,"nome":"O Diabo","dica":"Apego, vícios, ilusões, amarras.","sinonimos":["Diabo"]},
  {"num":16,"nome":"A Torre","dica":"Queda, ruptura, revelação.","sinonimos":["Torre"]},
  {"num":17,"nome":"A Estrela","dica":"Esperança, inspiração, fé.","sinonimos":["Estrela"]},
  {"num":18,"nome":"A Lua","dica":"Ilusões, mistério, inconsciente.","sinonimos":["Lua"]},
  {"num":19,"nome":"O Sol","dica":"Alegria, vitalidade, clareza.","sinonimos":["Sol"]},
  {"num":20,"nome":"O Julgamento","dica":"Despertar, reflexão, recomeço, perdão.","sinonimos":["Julgamento"]},
  {"num":21,"nome":"O Mundo","dica":"Conclusão, realização, plenitude, inteireza.","sinonimos":["Mundo"]},

  {"num":22,"nome":"Ás de Copas","dica":"Novo amor, emoções puras, intuição.","sinonimos":["As de Copas","As Copas", "Ás Copas"]},
  {"num":23,"nome":"Dois de Copas","dica":"Parceria, conexão, atração mútua.","sinonimos":["2 de Copas","Dois Copas"]},
  {"num":24,"nome":"Três de Copas","dica":"Celebração, amizade, alegria compartilhada.","sinonimos":["3 de Copas","Três Copas", "Tres Copas", "Tres de Copas"]},
  {"num":25,"nome":"Quatro de Copas","dica":"Reflexão, tédio, contemplação.","sinonimos":["4 de Copas","Quatro Copas"]},
  {"num":26,"nome":"Cinco de Copas","dica":"Perda, arrependimento, desapontamento.","sinonimos":["5 de Copas","Cinco Copas"]},
  {"num":27,"nome":"Seis de Copas","dica":"Memórias, nostalgia, reconciliação, inocência.","sinonimos":["6 de Copas","Seis Copas"]},
  {"num":28,"nome":"Sete de Copas","dica":"Ilusões, escolhas, fantasias.","sinonimos":["7 de Copas","Sete Copas"]},
  {"num":29,"nome":"Oito de Copas","dica":"Partida, busca interior, desapego.","sinonimos":["8 de Copas","Oito Copas"]},
  {"num":30,"nome":"Nove de Copas","dica":"Satisfação, prazer, conquistas.","sinonimos":["9 de Copas","Nove Copas"]},
  {"num":31,"nome":"Dez de Copas","dica":"Harmonia familiar, felicidade plena.","sinonimos":["10 de Copas","Dez Copas"]},
  {"num":32,"nome":"Valete de Copas","dica":"Mensagem, sensibilidade, coração jovem.","sinonimos":["Pajem de Copas","Valete Copas"]},
  {"num":33,"nome":"Cavaleiro de Copas","dica":"Romance, ação emocional, convite, charme.","sinonimos":["Cavaleiro Copas"]},
  {"num":34,"nome":"Rainha de Copas","dica":"Empatia, intuição, acolhimento e maturidade emocional.","sinonimos":["Rainha Copas"]},
  {"num":35,"nome":"Rei de Copas","dica":"Equilíbrio e maturidade emocional, sabedoria, diplomacia.","sinonimos":["Rei Copas"]},

  {"num":36,"nome":"Ás de Ouros","dica":"Novas oportunidades, prosperidade, recurso material.","sinonimos":["As de Ouros","As Ouros", "Ás Ouros"]},
  {"num":37,"nome":"Dois de Ouros","dica":"Equilíbrio, adaptação, mudanças.","sinonimos":["2 de Ouros","Dois Ouros"]},
  {"num":38,"nome":"Três de Ouros","dica":"Trabalho em equipe, aprendizado, habilidade.","sinonimos":["3 de Ouros","Três Ouros", "Tres Ouros", "Tres de Ouros"]},
  {"num":39,"nome":"Quatro de Ouros","dica":"Estabilidade, controle, segurança, apego material.","sinonimos":["4 de Ouros","Quatro Ouros"]},
  {"num":40,"nome":"Cinco de Ouros","dica":"Perda, escassez, sentimento de abandono.","sinonimos":["5 de Ouros","Cinco Ouros"]},
  {"num":41,"nome":"Seis de Ouros","dica":"Generosidade, equilíbrio, doação, troca justa.","sinonimos":["6 de Ouros","Seis Ouros"]},
  {"num":42,"nome":"Sete de Ouros","dica":"Plantação, paciência, investimento.","sinonimos":["7 de Ouros","Sete Ouros"]},
  {"num":43,"nome":"Oito de Ouros","dica":"Trabalho, dedicação, aperfeiçoamento.","sinonimos":["8 de Ouros","Oito Ouros"]},
  {"num":44,"nome":"Nove de Ouros","dica":"Independência, conquista, autossuficiência.","sinonimos":["9 de Ouros","Nove Ouros"]},
  {"num":45,"nome":"Dez de Ouros","dica":"Riqueza, herança ancestral, família.","sinonimos":["10 de Ouros","Dez Ouros"]},
  {"num":46,"nome":"Valete de Ouros","dica":"Aprendizado, curiosidade prática, iniciativa.","sinonimos":["Pajem de Ouros","Valete Ouros"]},
  {"num":47,"nome":"Cavaleiro de Ouros","dica":"Trabalho persistente, ação, paciência.","sinonimos":["Cavaleiro Ouros"]},
  {"num":48,"nome":"Rainha de Ouros","dica":"Segurança, prosperidade, cuidado prático.","sinonimos":["Rainha Ouros"]},
  {"num":49,"nome":"Rei de Ouros","dica":"Sucesso, estabilidade, liderança financeira.","sinonimos":["Rei Ouros"]},

  {"num":50,"nome":"Ás de Espadas","dica":"Novas ideias, clareza, decisão.","sinonimos":["As de Espadas","As Espadas", "Ás Espadas"]},
  {"num":51,"nome":"Dois de Espadas","dica":"Indecisão, equilíbrio, escolha difícil.","sinonimos":["2 de Espadas","Dois Espadas"]},
  {"num":52,"nome":"Três de Espadas","dica":"Dor, separação, decepção.","sinonimos":["3 de Espadas","Três Espadas", "Tres de espadas", "Tres espadas"]},
  {"num":53,"nome":"Quatro de Espadas","dica":"Descanso, reflexão, recuperação.","sinonimos":["4 de Espadas","Quatro Espadas"]},
  {"num":54,"nome":"Cinco de Espadas","dica":"Conflito, derrota, tensão.","sinonimos":["5 de Espadas","Cinco Espadas"]},
  {"num":55,"nome":"Seis de Espadas","dica":"Transição, mudança, viagem.","sinonimos":["6 de Espadas","Seis Espadas"]},
  {"num":56,"nome":"Sete de Espadas","dica":"Estratégia, engano, cautela.","sinonimos":["7 de Espadas","Sete Espadas"]},
  {"num":57,"nome":"Oito de Espadas","dica":"Restrição, limitação, medo.","sinonimos":["8 de Espadas","Oito Espadas"]},
  {"num":58,"nome":"Nove de Espadas","dica":"Ansiedade, preocupação, pesadelos.","sinonimos":["9 de Espadas","Nove Espadas"]},
  {"num":59,"nome":"Dez de Espadas","dica":"Fim doloroso, derrota, encerramento.","sinonimos":["10 de Espadas","Dez Espadas"]},
  {"num":60,"nome":"Valete de Espadas","dica":"Curiosidade, vigilância, notícias.","sinonimos":["Pajem de Espadas","Valete Espadas"]},
  {"num":61,"nome":"Cavaleiro de Espadas","dica":"Ação rápida, coragem, determinação.","sinonimos":["Cavaleiro Espadas"]},
  {"num":62,"nome":"Rainha de Espadas","dica":"Inteligência, discernimento, independência.","sinonimos":["Rainha Espadas"]},
  {"num":63,"nome":"Rei de Espadas","dica":"Autoridade, estratégia, razão.","sinonimos":["Rei Espadas"]},

  {"num":64,"nome":"Ás de Paus","dica":"Novo empreendimento, energia, inspiração.","sinonimos":["As de Paus","As Paus", "Ás Paus"]},
  {"num":65,"nome":"Dois de Paus","dica":"Planejamento, escolhas, visão de futuro.","sinonimos":["2 de Paus","Dois Paus"]},
  {"num":66,"nome":"Três de Paus","dica":"Progresso, expansão, oportunidades.","sinonimos":["3 de Paus","Três Paus", "Tres Paus", "Tres de Paus"]},
  {"num":67,"nome":"Quatro de Paus","dica":"Celebração, estabilidade, lar.","sinonimos":["4 de Paus","Quatro Paus"]},
  {"num":68,"nome":"Cinco de Paus","dica":"Conflito, competição, desafios.","sinonimos":["5 de Paus","Cinco Paus"]},
  {"num":69,"nome":"Seis de Paus","dica":"Vitória, reconhecimento, progresso.","sinonimos":["6 de Paus","Seis Paus"]},
  {"num":70,"nome":"Sete de Paus","dica":"Defesa, perseverança, coragem.","sinonimos":["7 de Paus","Sete Paus"]},
  {"num":71,"nome":"Oito de Paus","dica":"Rapidez, movimento, mudanças.","sinonimos":["8 de Paus","Oito Paus"]},
  {"num":72,"nome":"Nove de Paus","dica":"Resistência, cautela, persistência.","sinonimos":["9 de Paus","Nove Paus"]},
  {"num":73,"nome":"Dez de Paus","dica":"Sobrecarga, responsabilidade, esforço.","sinonimos":["10 de Paus","Dez Paus"]},
  {"num":74,"nome":"Valete de Paus","dica":"Entusiasmo, curiosidade, energia criativa.","sinonimos":["Pajem de Paus","Valete Paus"]},
  {"num":75,"nome":"Cavaleiro de Paus","dica":"Ousadia, aventura, movimento, impulso.","sinonimos":["Cavaleiro Paus"]},
  {"num":76,"nome":"Rainha de Paus","dica":"Confiança, liderança, sensualidade.","sinonimos":["Rainha Paus"]},
  {"num":77,"nome":"Rei de Paus","dica":"Visão, liderança, determinação.","sinonimos":["Rei Paus"]}
]';


$dados = json_decode($json, true);
$cartas = [];
foreach ($dados as $d) {
    $sinonimos = $d['sinonimos'] ?? [];
    $cartas[] = new Carta($d['num'], $d['nome'], $d['dica'], $sinonimos);
}

$pontos = 0;

function menu(array $cartas, int &$pontos) {
    while (true) {
        system('clear');
        echo "___________________________________________\n\n               --- MENU ---\n\n";
        echo "1 - Mostrar todas as cartas\n";
        echo "2 - Adivinhar a carta\n";
        echo "3 - Sair\n";
        echo "Pontuação atual: $pontos\n___________________________________________\n\n";
        echo "Escolha uma opção: ";
        $opcao = trim(fgets(STDIN));

        if ($opcao == "1") {
            system('clear');
            echo "\nCartas disponíveis:\n";
            foreach ($cartas as $c) {
                echo $c->getNum() . " - " . $c->getNome() . "\n";
            }
            echo "Pressione 'ENTER' para voltar";
            fgets(STDIN);

        } elseif ($opcao == "2") {
            $palpite = " ";
            while ($palpite !=''){
            system('clear');
            $sorteada = $cartas[array_rand($cartas)];
            echo "Pressione 'ENTER' para voltar ao menu\nPontuação atual: " . $pontos . "\n___________________________________________________\n\n";
            echo "💡 Dica: " . $sorteada->getDica() . "\n";
            echo "Digite o número ou nome da carta: ";
            $palpite = trim(fgets(STDIN));

            if ($palpite === '') {
                continue;
            }

            $acertou = false;

            if (is_numeric($palpite)) {
                if ((int)$palpite === $sorteada->getNum()) {
                    $acertou = true;
                }
            } else {
                $palpiteLower = strtolower($palpite);
                $nomesAceitos = array_merge([$sorteada->getNome()], $sorteada->getSinonimos());
                foreach ($nomesAceitos as $nome) {
                    if ($palpiteLower === strtolower($nome)) {
                        $acertou = true;
                        break;
                    }   
                }
            }

            if ($acertou) {
                echo "🎉 Acertou! Era " . $sorteada->getNome() . "!\n";
                $pontos++;
            } else {
                echo "❌ Errou. Era " . $sorteada->getNome() . " (" . $sorteada->getNum() . ")\n";
                $pontos--;
            }
            sleep(3);
        }

        } elseif ($opcao == "3") {
            system('clear');
            echo "Jogo encerrado. Pontuação final: $pontos\n";
            break;

        } else {
            echo "Opção inválida.\n";
            sleep(2);
        }
    }
}

menu($cartas, $pontos);
