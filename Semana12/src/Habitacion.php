<?php

namespace App;

class Habitacion
{
    private int $numero;
    private string $tipo;
    private float $precio;
    private bool $disponible;
    
    public function __construct(int $numero, string $tipo, float $precio)
    {
        $this->numero = $numero;
        $this->tipo = $tipo;
        $this->precio = $precio;
        $this->disponible = true;
    }
    
    public function reservar(): void
    {
        $this->disponible = false;
    }
    
    public function isDisponible(): bool
    {
        return $this->disponible;
    }
    
    public function getNumero(): int
    {
        return $this->numero;
    }
    
    public function getTipo(): string
    {
        return $this->tipo;
    }
    
    public function getPrecio(): float
    {
        return $this->precio;
    }
}
