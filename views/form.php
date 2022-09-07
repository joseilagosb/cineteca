<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cineteca - Sugiere una película!</title>

  <link rel="stylesheet" href="assets/styles/global.css" type="text/css">
  <link rel="stylesheet" href="assets/styles/form.css" type="text/css">
</head>

<body>
  <div class="wrapper">
    <div class="background"></div>
    <div class="content">
      <div class="navbar">
        <a href="/cineteca-php/index.php" class="page">Inicio</a>
        <a href="/cineteca-php/form.php" class="page">Sugerir una película</a>
        <a href="/cineteca-php/films.php" class="page">Taquilla</a>
      </div>
      <div class="title">Sugiere una película! 🍿</div>
      <form onsubmit="return validar_datos();" action="ingresar_pelicula.php" method="POST" class="form">
        <div class="error-message">
          <span class="text"></span>
        </div>
        <div class="field">
          <label for="nombre-pelicula">Nombre de la película</label>
          <input id="nombre-pelicula" name="nombre-pelicula"></input>
        </div>
        <div class="field">
          <label for="director">Director</label>
          <input id="director" name="director"></input>
        </div>
        <div class="field">
          <label for="ranking">Ranking</label>
          <select id="ranking" name="ranking">
            <option value="G">G</option>
            <option value="PG">PG</option>
            <option value="PG-13">PG-13</option>
            <option value="R">R</option>
          </select>
        </div>
        <div class="field">
          <label for="score">Puntaje Rotten Tomatoes 🍅</label>
          <div class="radio-group">
            <input type="radio" name="score" id="score_20" value="20">
            <label for="score_20">⭐</label>
          </div>
          <div class="radio-group">
            <input type="radio" name="score" id="score_40" value="40">
            <label for="score_40">⭐⭐</label>
          </div>
          <div class="radio-group">
            <input type="radio" name="score" id="score_60" value="60">
            <label for="score_60">⭐⭐⭐</label>
          </div>
          <div class="radio-group">
            <input type="radio" name="score" id="score_80" value="80">
            <label for="score_80">⭐⭐⭐⭐</label>
          </div>
          <div class="radio-group">
            <input type="radio" name="score" id="score_100" value="100">
            <label for="score_100">⭐⭐⭐⭐⭐</label>
          </div>
        </div>
        <div class="field">
          <label for="year">Año de estreno</label>
          <input id="year" name="year" type="number" min="1900" max="2099" step="1" value="2013" />
        </div>
        <div class="field">
          <label for="month">Mes de estreno</label>
          <select id="month" name="month">
            <option>Enero</option>
            <option>Febrero</option>
            <option>Marzo</option>
            <option>Abril</option>
            <option>Mayo</option>
            <option>Junio</option>
            <option>Julio</option>
            <option>Agosto</option>
            <option>Septiembre</option>
            <option>Octubre</option>
            <option>Noviembre</option>
            <option>Diciembre</option>
          </select>
        </div>
        <button class="submit" type="submit">Enviar solicitud</button>
      </form>
    </div>
  </div>
</body>

<script src="assets/scripts/form.js"></script>
<script src="assets/scripts/jquery.min.js"></script>

</html>