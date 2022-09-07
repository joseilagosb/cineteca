function validar_datos() {
  // Extraemos el valor del select "Ranking"
  const ranking = $(".form .field #ranking").val();

  // Si el ranking es R o PG-13 se muestra el mensaje de error que no se aceptan películas para mayores
  if (ranking === "R" || ranking === "PG-13") {
    $(".error-message").css("display", "flex");
    $(".error-message .text").html(
      "Lo sentimos, por el momento solo aceptamos películas familiares (G, PG)"
    );
    return false;
  }

  // Validación para los demás datos
  const nombre_pelicula = $("#nombre-pelicula").val();
  const director = $("#director").val();

  var formulario_es_valido = true;

  // Si uno de los dos campos está vacío arroja error
  if (nombre_pelicula === "" || director === "") {
    formulario_es_valido = false;
  }

  // Selecciono el listado de radio buttons de puntaje (una estrella, dos estrellas, tres estrellas, etc...)
  const opciones_puntaje = $("input[type=radio][name='score']");

  opciones_puntaje.each(function (opcion) {
    // ver si hay al menos una opción seleccionada (checked)
  });

  return formulario_es_valido;
}
