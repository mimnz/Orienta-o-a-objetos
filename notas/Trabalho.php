<?php

require_once 'Instrumento.php'; 

class Trabalho extends Instrumento {
    
    public function getNotaFinal(): float {
        $notaCalculada = $this->nota * 1.20;
        
        return $this->limitarNotaMaxima($notaCalculada);
    }
}