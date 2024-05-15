<?php

namespace Funcionalidades;

class CalcularDni
{
    private $dni;

    public function prueba(string $undni)
    {
        $resto = $undni % 23;
        $letra = 'TRWAGMYFPDXBNJZSQVHLCKE';
        $resultado = $letra[$resto];
        return $resultado;
    }
}
