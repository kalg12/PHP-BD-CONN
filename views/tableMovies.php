<?php
require_once './config/dataConnection.php';
require_once './models/Movie.php';

$movie = new Movie();
$result = $movie -> getMovies();
?>

<table class="table table-striped container">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Duración</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($row = mysqli_fetch_array($result)) {
                ?>
        <tr>
            <td><?php echo $row['idPelicula']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['categoria']; ?></td>
            <td><?php echo $row['duracion']; ?></td>
            <td><a href="editMovie.php?idPelicula=<?php echo $row['idPelicula']; ?>" class="btn btn-warning">Editar</a></td>
            <td><a href="deleteMovie.php?idPelicula=<?php echo $row['idPelicula']; ?>" class="btn btn-danger">Eliminar</a></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>