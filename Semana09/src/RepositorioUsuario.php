<?php

namespace App;

class RepositorioUsuario
{
    public function guardar(string $email): bool
    {
        return true;
    }
    
    public function existe(string $email): bool
    {
        return false;
    }
}