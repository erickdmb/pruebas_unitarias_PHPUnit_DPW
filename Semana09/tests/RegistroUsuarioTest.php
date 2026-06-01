<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\RegistroUsuario;
use App\RepositorioUsuario;

class RegistroUsuarioTest extends TestCase
{
    public function testRegistrarRetornaTrueCuandoGuardarRetornaTrue()
    {
        $mock = $this->createMock(RepositorioUsuario::class);
        $mock->method('guardar')->willReturn(true);
        $mock->method('existe')->willReturn(false);
        
        $registro = new RegistroUsuario($mock);
        $resultado = $registro->registrar('nuevo@test.com');
        
        $this->assertTrue($resultado);
    }
    
    public function testRegistrarLlamaAGuardarUnaVez()
    {
        $mock = $this->createMock(RepositorioUsuario::class);
        $mock->method('existe')->willReturn(false);
        
        $mock->expects($this->once())
             ->method('guardar')
             ->with('usuario@test.com')
             ->willReturn(true);
        
        $registro = new RegistroUsuario($mock);
        $registro->registrar('usuario@test.com');
    }
    
    public function testRegistrarRetornaFalseCuandoEmailYaExiste()
    {
        $mock = $this->createMock(RepositorioUsuario::class);
        $mock->method('existe')->willReturn(true);
        
        $mock->expects($this->never())->method('guardar');
        
        $registro = new RegistroUsuario($mock);
        $resultado = $registro->registrar('existente@test.com');
        
        $this->assertFalse($resultado);
    }
}