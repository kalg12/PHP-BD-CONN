<?php
require_once './config/dataConnection.php';

class Movie extends Conexion{

    public function __construct()
    {
        $this->conectar();
    }

    /* Función para insertar valores desde un formulario a mi DB */
    public function insertMovie($nombre, $categoria, $duracion){
        $sql = "INSERT INTO peliculasdb (nombre, categoria, duracion) VALUES ('$nombre', '$categoria', '$duracion')";
        $result = mysqli_query($this->conectar(), $sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }

}

?>