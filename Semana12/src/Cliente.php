<?php

namespace App;

class Cliente
{
    private string $nombre;
    private string $email;
    private string $telefono;
    
    public function __construct(string $nombre, string $email, string $telefono)
    {
        if (empty($nombre)) {
            throw new \InvalidArgumentException("El nombre no puede estar vacío");
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException("Email inválido");
        }
    
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
<<<<<<< HEAD:Semana12/src/cliente.php

=======
    
>>>>>>> fd59522006afd8a07ebcf6ebf04d0bd5191af27d:Semana12/src/Cliente.php
    public function getTelefono(): string
    {
        return $this->telefono;
    }
<<<<<<< HEAD:Semana12/src/cliente.php
}
=======
}
>>>>>>> fd59522006afd8a07ebcf6ebf04d0bd5191af27d:Semana12/src/Cliente.php
