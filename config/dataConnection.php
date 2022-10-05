<?php

class Conexion
{
    public function conectar()
    {
        /* Necesitamos 4 parametros: servidor, usuario, contraseña, nombre_bd */
        /* localhost = host; root = user; '' = password; 'peliculas' = database */
        $enlace = mysqli_connect('sql521.main-hosting.eu', 'u413489667_equipoTres', '@equipoTres202240', 'u413489667_equipoTres');
        if($enlace){
            echo "Conexión correcta a la base de datos, si pude mamá";
        }
        return $enlace;
    }
}

?>