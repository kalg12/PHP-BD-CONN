<div class="container mt-5 mb-5">
<form action="index.php" method="post">
    <div class="form-group mt-3">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la película">
    </div>
    <div class="form-group mt-3">
        <label for="categoria">Categoría</label>
        <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoría de la película">
    </div>
    <div class="form-group mt-3">
        <label for="duracion">Duración</label>
        <input type="number" class="form-control" id="duracion" name="duracion" placeholder="Duración de la película">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Guardar</button>
</form>
</div>

<?php
/* Nos traemos todo el código del archivo Movie.php */
require_once './models/Movie.php';

/* Creamos un objeto de la clase Movie */
$movie = new Movie();

/* Insertar datos del formulario en la tabla peliculas */
/* Getting the data from the form and storing it in variables. */
if (isset($_POST['nombre']) && isset($_POST['categoria']) && isset($_POST['duracion'])) {
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$duracion = $_POST['duracion'];

/* Insertar los valores de las variables como parametro a nuestra función insertMovie */
$movie->insertMovie($nombre,$categoria,$duracion);
}
?>