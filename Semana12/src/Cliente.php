<?php

namespace App;

class Cliente
{
    private string $nombre;
    private string $email;
    private string $telefono;
    
    public function __construct(string $nombre, string $email, string $telefono)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->telefono = $telefono;
    }
    
    public function getNombre(): string
    {
        return $this->nombre;
    }
    
    public function getEmail(): string
    {
        return $this->email;
    }
    
    public function getTelefono(): string
    {
        return $this->telefono;
    }
}
