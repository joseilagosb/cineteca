<?php
include 'models/Pelicula.php';

$db = mysqli_connect('localhost', 'root', '', 'cineteca');
$pelicula_model = new Pelicula($db);

$peliculas = $pelicula_model->todas_las_peliculas();

require_once("views/films.php");