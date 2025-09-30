<?php

//ARQUIVO INICIAL

spl_autoload_register(function ($nomeDaClasse) {
    $caminhoArquivo = $nomeDaClasse . '.php';
    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});
// --------------------------------------------------------

// Inclui o arquivo que contém a função do menu
require_once 'Menu.php';

// Inicia o programa
menuPrincipal();