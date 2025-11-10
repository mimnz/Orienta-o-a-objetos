<?php

abstract class Instrumento {
    
    protected float $nota;

    public function __construct(float $nota) {
        $this->nota = $nota;
    }

    abstract public function getNotaFinal(): float;
    
    protected function limitarNotaMaxima(float $notaCalculada): float {
        return min($notaCalculada, 10.0);
    }
}