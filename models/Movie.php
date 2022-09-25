<?php
/* Traemos la funcion conectar de la clase Conexion del archivo dataConnection.php */

require_once './config/dataConnection.php';

class Movie extends Conexion
{
    public function __construct()
    {
        $this->conectar();
    }

    public function insertMovie($nombre, $categoria, $duracion)
    {
        $sql = "INSERT INTO peliculas (nombre, categoria, duracion) VALUES ('$nombre', '$categoria', '$duracion')";
        $result = mysqli_query($this->conectar(), $sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getMovies()
    {
        $sql = "SELECT * FROM peliculas";
        $result = mysqli_query($this->conectar(), $sql);
        return $result;
    }

    public function editMovie($idPelicula)
    {
        $sql = "SELECT * FROM peliculas WHERE idPelicula = '$idPelicula'";
        $result = mysqli_query($this->conectar(), $sql);
        return $result;
    }

    public function deleteMovie($idPelicula)
    {
        $sql = "DELETE FROM peliculas WHERE idPelicula = '$idPelicula'";
        $result = mysqli_query($this->conectar(), $sql);
        if ($result) {
            echo "Datos eliminados correctamente";
        } else {
            echo "Error al eliminar los datos";
        }
    }
}