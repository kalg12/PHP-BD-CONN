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

?>