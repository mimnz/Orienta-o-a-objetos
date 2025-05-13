<?php

class Animal {
    public $especie;
    public $numeroPatas;
    public $pele;

    function __construct($especie, $numeroPatas, $pele){
        $this->especie = $especie;
        $this->numeroPatas = $numeroPatas;
        $this->pele = $pele;
    }

    function emitirSom(){
        if($this->especie == 'Cachorro')
            echo "Woof woof Woof!!!\n";
        elseif($this->especie == 'Porco')
            echo "Oinc oinc!\n";
        elseif($this->especie == 'Abelha')
            echo "bzzzzzz zzzzzz...\n";
        elseif($this->especie == 'Cavalo')
            echo "Iiirrrrí!!!!\n";
        elseif($this->especie == 'Cabritinho')
            echo "Méééééé!!\n";
        elseif($this->especie == 'Cobra')
            echo "Sssssss...\n";
        elseif($this->especie == 'Corvo')
            echo "Croac croac!!\n";
        elseif($this->especie == 'Coruja')
            echo "Uh uh, uh!\n";
        elseif($this->especie == 'Galinha')
            echo "Pó pó PóóPóó!\n";
        elseif($this->especie == 'Galo')
            echo "Cocoroooocóóóóó!!\n";
        elseif($this->especie == 'Gato')
            echo "Meow... meoww!!\n";
        elseif($this->especie == 'Pato')
            echo "Quá quá quá!!\n";
            elseif($this->especie == 'Pinto')
            echo "Piu piu piu !\n";
        elseif($this->especie == 'Vaca')
            echo "Muuuhhh!!\n";
        elseif($this->especie == 'Sapo')
            echo "Rebeth!\n";
    }

    function movimento(){
        if($this->especie == 'Cachorro')
            echo "Ele corre.\n";
        elseif($this->especie == 'Porco')
            echo "Ele anda.\n";
        elseif($this->especie == 'Abelha')
            echo "Ela voa.\n";
        elseif($this->especie == 'Cavalo')
            echo "Ele galopa.\n";
        elseif($this->especie == 'Cabritinho')
            echo "Ele te mostra aquele pulinho.\n";
        elseif($this->especie == 'Cobra')
            echo "Ela rasteja.\n";
        elseif($this->especie == 'Corvo')
            echo "Ele voa.\n";
        elseif($this->especie == 'Coruja')
            echo "Ela voa.\n";
        elseif($this->especie == 'Galinha')
            echo "Ela cisca.\n";
        elseif($this->especie == 'Galo')
            echo "Ele cisca.\n";
        elseif($this->especie == 'Gato')
            echo "Ele desfila.\n";
        elseif($this->especie == 'Pato')
            echo "ELe nada.\n";
            elseif($this->especie == 'Pinto')
            echo "Ele cisca feliz.\n";
        elseif($this->especie == 'Vaca')
            echo "Ela conversa.\n";
        elseif($this->especie == 'Sapo')
            echo "Ele pula.\n";
    }

    function comer(){
        if($this->especie == 'Cachorro')
            echo "Ele come ração de cachorro e carne.\n";
        elseif($this->especie == 'Porco')
            echo "Ele come esterco e lavagem.\n";
        elseif($this->especie == 'Abelha')
            echo "Ela come mel.\n";
        elseif($this->especie == 'Cavalo')
            echo "Ele come feno.\n";
        elseif($this->especie == 'Cabritinho')
            echo "Ele bebe leite.\n";
        elseif($this->especie == 'Cobra')
            echo "Ela come ovos, ratos e aves.\n";
        elseif($this->especie == 'Corvo')
            echo "Ele come sementes, frutas e carne podre.\n";
        elseif($this->especie == 'Coruja')
            echo "Ela come ratos, insetos e pequenas aves.\n";
        elseif($this->especie == 'Galinha')
            echo "Ela come milho e minhoca.\n";
        elseif($this->especie == 'Galo')
            echo "Ele come milho e minhoca.\n";
        elseif($this->especie == 'Gato')
            echo "Ele come ração, ratos e carne de outros animais pequenos.\n";
        elseif($this->especie == 'Pato')
            echo "Ele come sementes, insetos, peixes e larvas.\n";
            elseif($this->especie == 'Pinto')
            echo "Ele come quirel de milho.\n";
        elseif($this->especie == 'Vaca')
            echo "Ela come capim, feno e outros vegetais volumosos.\n";
        elseif($this->especie == 'Sapo')
            echo "Ele come insetos, aranhas, lesmas e minhocas.\n";
    }
}

$dadosAnimais = [
    ['Cachorro', 4, 'Pelo'],
    ['Porco', 4, 'Pele'],
    ['Abelha', 6, 'Exoesqueleto'],
    ['Cavalo', 4, 'Pelo'],
    ['Cabritinho', 4, 'Pelo'],
    ['Cobra', 0, 'Escamas'],
    ['Corvo', 2, 'Penas'],
    ['Coruja', 2, 'Penas'],
    ['Galinha', 2, 'Penas'],
    ['Galo', 2, 'Penas'],
    ['Gato', 4, 'Pelo'],
    ['Pato', 2, 'Penas'],
    ['Pinto', 2, 'Penas'],
    ['Vaca', 4, 'Pelo'],
    ['Sapo', 4, 'Pele']
];

$contador = 1;
system('clear');
foreach ($dadosAnimais as $dados) {
    echo "===== Animal $contador =====\n";
    $Animal = new Animal($dados[0], $dados[1], $dados[2]);
    echo "Espécie: {$Animal->especie}\n";
    echo "Número de patas: {$Animal->numeroPatas}\n";
    echo "Tipo de pele: {$Animal->pele}\n";
    echo "Esse animal faz: ";
    $Animal->emitirSom();
    $Animal->movimento();
    $Animal->comer();
    echo "\n";
    $contador++;
}   
