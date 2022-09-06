<?php
$nombre_pelicula = htmlspecialchars($_POST['nombre-pelicula']);
$director = htmlspecialchars($_POST['director']);
$ranking = htmlspecialchars($_POST['ranking']);
$puntaje = htmlspecialchars($_POST['score']);
$anio_estreno = htmlspecialchars($_POST['year']);
$mes_estreno = htmlspecialchars($_POST['month']);

require_once("views/ingresar_pelicula.php");