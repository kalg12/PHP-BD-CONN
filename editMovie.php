<?php
require_once './models/Movie.php';

$movie = new Movie();

//Creamos modelo para editar pelicula
if (isset($_GET['idPelicula'])) {
    $idPelicula = $_GET['idPelicula'];
    $result = $movie->editMovie($idPelicula);
    $row = mysqli_fetch_array($result);
}

//Creamos modelo para actualizar pelicula
if (isset($_POST['idPelicula']) && isset($_POST['nombre']) && isset($_POST['categoria']) && isset($_POST['duracion'])) {
    $idPelicula = $_POST['idPelicula'];
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $duracion = $_POST['duracion'];

    $sql = "UPDATE peliculas SET nombre = '$nombre', categoria = '$categoria', duracion = '$duracion' WHERE idPelicula = '$idPelicula'";
    $result = mysqli_query($movie->conectar(), $sql);
    if ($result) {
        Header("Location: index.php");
    } else {
        echo "Error al actualizar los datos";
    }
}
?>

<?php
include_once "./views/header.php";
include './views/navbar.php';
?>

<div class="container mt-5 mb-5">
    <form action="editMovie.php" method="post">
        <div class="form-group mt-3">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la película" value="<?php echo $row['nombre']; ?>">
        </div>
        <div class="form-group mt-3">
            <label for="categoria">Categoría</label>
            <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoría de la película" value="<?php echo $row['categoria']; ?>">
        </div>
        <div class="form-group mt-3">
            <label for="duracion">Duración</label>
            <input type="number" class="form-control" id="duracion" name="duracion" placeholder="Duración de la película" value="<?php echo $row['duracion']; ?>">
        </div>
        <input type="hidden" name="idPelicula" value="<?php echo $row['idPelicula']; ?>">
        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
    </form>
</div>