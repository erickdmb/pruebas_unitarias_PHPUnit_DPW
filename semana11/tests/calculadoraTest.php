<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use App\Calculadora;

class CalculadoraTest extends TestCase
{
    private $calculadora;
    
    protected function setUp(): void
    {
        $this->calculadora = new Calculadora();
    }
    
    public static function proveedorDivisionNormal():array
    {
        return [
            [10, 2, 5],
            [7, 2, 3.5],
            [0, 2, 0],
        ];
    }

    #[DataProvider('proveedorDivisionNormal')]
    public function testDividirNormal($dividendo, $divisor, $esperado)
    {
        $resultado = $this->calculadora->dividir($dividendo, $divisor);
        $this->assertEquals($esperado, $resultado);
    }
    
    public function testDividirEntreCero()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("No se puede dividir por cero");
        
        $this->calculadora->dividir(10, 0);
    }
    
    public function testRaizCuadradaNormal()
    {
        $resultado = $this->calculadora->raizCuadrada(16);
        $this->assertEquals(4, $resultado);
    }
    
    public function testRaizCuadradaNegativa()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("No se puede calcular la raíz cuadrada de un número negativo");
        
        $this->calculadora->raizCuadrada(-4);
    }

    public function testFactorialNormal()
    {
        $resultado = $this->calculadora->factorial(5);
        $this->assertEquals(120, $resultado);
    }

    public function testFactorialCero()
    {
        $resultado = $this->calculadora->factorial(0);
        $this->assertEquals(1, $resultado);
    }

    public function testFactorialNegativo()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("No existe factorial de números negativos");
        
        $this->calculadora->factorial(-5);
    }
}