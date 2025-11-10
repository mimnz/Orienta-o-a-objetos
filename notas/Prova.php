<?php

require_once 'Instrumento.php'; 

class Prova extends Instrumento {
    
    public function getNotaFinal(): float {
        $notaCalculada = $this->nota * 1.30;
        
        return $this->limitarNotaMaxima($notaCalculada);
    }
}