<?php

class Conexion
{
    public function conectar()
    {
        $enlace = mysqli_connect('localhost', 'root', '', 'peliculas');
        if (!$enlace) {
            echo "Error: No se pudo conectar a la Base de Datos." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        return $enlace;
    }
}

?>