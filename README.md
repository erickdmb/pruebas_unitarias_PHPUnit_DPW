# Proyecto de Pruebas Unitarias con PHPUnit

Este repositorio contiene los ejercicios y la estructura base para el curso de **Diseño y Programación Web (DPW)**.
## Requisitos Previos
* PHP 8.2 o superior instalado.
* [Composer](https://getcomposer.org/) instalado globalmente.

## Configuración del Proyecto
Sigue estos pasos para preparar tu entorno de trabajo:

1. **Instalar Dependencias:**

Ejecuta el siguiente comando para descargar PHPUnit y configurar el autoloader:

```bash
composer install
```

2. **Verificar Instalación:**

Corre el siguiente comando para asegurarte de que PHPUnit responde correctamente:

```Bash
./vendor/bin/phpunit --version //(mac/linux)
vendor\bin\phpunit --version //(windows)
```

3. **Cómo ejecutar las pruebas**
Ejecutar todos los tests:

```Bash
./vendor/bin/phpunit
vendor\bin\phpunit
```

Ejecutar un test específico:

```Bash
./vendor/bin/phpunit --filter NombreDelTest

vendor\bin\phpunit --filter NombreDelTest
```

4. **Generar reporte de cobertura (Coverage):**

  *(Requiere Xdebug instalado)*


```bash
./vendor/bin/phpunit --coverage-html build/coverage
vendor\bin\phpunit --coverage-html build/coverage
```

5. **Estructura de Carpetas**

src/: Aquí va la lógica de negocio (tus clases PHP).
tests/: Aquí van tus archivos de prueba (Test Cases).
vendor/: Librerías externas (gestionado por Composer).