<?php
require_once './models/Movie.php';

$movie = new Movie();

if (isset($_GET['idPelicula'])) {
    $idPelicula = $_GET['idPelicula'];
    $movie->deleteMovie($idPelicula);
}

?>