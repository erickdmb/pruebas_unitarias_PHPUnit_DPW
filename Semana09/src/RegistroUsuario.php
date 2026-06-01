<?php

namespace App;

class RegistroUsuario
{
    private RepositorioUsuario $repositorio;
    
    public function __construct(RepositorioUsuario $repositorio)
    {
        $this->repositorio = $repositorio;
    }
    
    public function registrar(string $email): bool
    {
        if ($this->repositorio->existe($email)) {
            return false;
        }
        return $this->repositorio->guardar($email);
    }
}