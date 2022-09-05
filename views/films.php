<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cineteca - Sugiere una película!</title>

  <link rel="stylesheet" href="assets/styles/global.css" type="text/css">
  <link rel="stylesheet" href="assets/styles/films.css" type="text/css">
</head>

<body>
  <div class="wrapper">
    <div class="background"></div>
    <div class="content">
      <div class="navbar">
        <a href="/cineteca/index.php" class="page">Inicio</a>
        <a href="/cineteca/form.php" class="page">Sugerir una película</a>
        <a href="/cineteca/films.php" class="page">Taquilla</a>
      </div>
      <div class="info">Lo más visto 😎</div>
      <div class="last-updated">Última actualización: 02/09/2022</div>
      <table class="films-table">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Director</th>
            <th>Rating</th>
            <th>Puntaje Rotten Tomatoes</th>
            <th>Recaudación 🤑</th>
            <th>Mes de estreno</th>
            <th>Año de estreno</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_array($peliculas)) { ?>
          <tr>
            <td><?php echo $row[0] ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[3] ?></td>
            <td><?php echo $row[4] ?></td>
            <td><?php echo $row[5] ?></td>
            <td><?php echo $row[6] ?></td>
            <td><?php echo $row[7] ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

    </div>
  </div>
</body>

<script src="scripts/jquery.min.js"></script>

</html>