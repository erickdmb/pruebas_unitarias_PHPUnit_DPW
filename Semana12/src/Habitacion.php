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
        if ($numero <= 0) {
            throw new \InvalidArgumentException("El número debe ser positivo");
        }

        if ($precio <= 0) {
            throw new \InvalidArgumentException("El precio debe ser positivo");
        }
    
        $this->numero = $numero;
        $this->tipo = $tipo;
        $this->precio = $precio;
        $this->disponible = true;
    }
    
    public function reservar(): void
    {
        if (!$this->disponible) {
            throw new \Exception("La habitación no está disponible");
        }
    
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
<<<<<<< HEAD:Semana12/src/habitacion.php

=======
    
>>>>>>> fd59522006afd8a07ebcf6ebf04d0bd5191af27d:Semana12/src/Habitacion.php
    public function getTipo(): string
    {
        return $this->tipo;
    }
<<<<<<< HEAD:Semana12/src/habitacion.php

=======
    
>>>>>>> fd59522006afd8a07ebcf6ebf04d0bd5191af27d:Semana12/src/Habitacion.php
    public function getPrecio(): float
    {
        return $this->precio;
    }
<<<<<<< HEAD:Semana12/src/habitacion.php
}
=======
}
>>>>>>> fd59522006afd8a07ebcf6ebf04d0bd5191af27d:Semana12/src/Habitacion.php
