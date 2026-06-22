<?php

namespace App;

class Reserva
{
    private Cliente $cliente;
    private Habitacion $habitacion;
    private string $fechaIngreso;
    private string $fechaSalida;
    
    public function __construct(Cliente $cliente, Habitacion $habitacion, string $fechaIngreso, string $fechaSalida)
    {
        $this->cliente = $cliente;
        $this->habitacion = $habitacion;
        $this->fechaIngreso = $fechaIngreso;
        $this->fechaSalida = $fechaSalida;
    }
    
    public function calcularTotal(): float
    {
        $dias = 1;
        return $dias * $this->habitacion->getPrecio();
    }
}
