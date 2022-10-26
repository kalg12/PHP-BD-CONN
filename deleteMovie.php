<?php
require_once './models/Movie.php';
$movie = new Movie(); //Instanciar la clase

if (isset($_GET['idPelicula'])) {
    $idPelicula = $_GET['idPelicula'];
    $movie->deleteMovie($idPelicula);
}
?>