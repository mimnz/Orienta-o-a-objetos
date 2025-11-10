<?php

require_once 'Instrumento.php'; 

class Participacao extends Instrumento {
    
    public function getNotaFinal(): float {
        return $this->limitarNotaMaxima($this->nota);
    }
}