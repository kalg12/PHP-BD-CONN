<?php

class Conexion
{
    public function conectar()
    {
        /* Necesitamos 4 parametros: servidor, usuario, contraseña, nombre_bd */
        $enlace = mysqli_connect('localhost', 'root', '', 'peliculas');
        if($enlace){
            echo "Conexión correcta a la base de datos, si pude mamá";
        }
        return $enlace;
    }
}

?>