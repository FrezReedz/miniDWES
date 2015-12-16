<div class="container">
    <h2><?= $cancion->track ?></h2>
    <p>Artista:<br><?= $cancion->artist ?></p>
    <p>URL:<br><a href="<?= $cancion->link ?>"><?= $cancion->link ?></a></p>
    <p><br><a href="/canciones/listar"> &lt;== Volver al listado de canciones</a></p>
</div>