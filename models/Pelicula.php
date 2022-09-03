<?php

class Pelicula
{
  protected $db;

  public function __construct(mysqli $db)
  {
    $this->db = $db;
  }

  public function todas_las_peliculas()
  {
    return mysqli_query($this->db, "SELECT * from peliculas");
  }
}