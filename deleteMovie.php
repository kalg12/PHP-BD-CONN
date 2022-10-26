<?php
require_once './models/Movie.php';
$movie = new Movie(); //Instanciar la clase

/* Checking if the idPelicula is set, if it is, it will delete the movie. */
if (isset($_GET['idPelicula'])) {
    $idPelicula = $_GET['idPelicula'];
    $movie->deleteMovie($idPelicula);
}
?>