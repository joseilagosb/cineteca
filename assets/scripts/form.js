function validar_datos() {
  var formulario_es_valido = true;

  // Antes que nada, vaciamos el HTML del texto de error
  $(".error-message .text").html("");

  // Extraemos el valor del select "Ranking"
  const ranking = $(".form .field #ranking").val();

  // Si el ranking es R o PG-13 se muestra el mensaje de error que no se aceptan películas para mayores
  if (ranking === "R" || ranking === "PG-13") {
    $(".error-message").css("display", "flex");

    // Insertamos SOBRE EL HTML contenido en text
    $(".error-message .text").append(
      "<p>Lo sentimos, por el momento solo aceptamos películas familiares (G, PG)</p>"
    );
    formulario_es_valido = false;
  }

  // Validación para los demás datos
  const nombre_pelicula = $("#nombre-pelicula").val();
  const director = $("#director").val();

  // Selecciono el listado de radio buttons de puntaje (una estrella, dos estrellas, tres estrellas, etc...)
  const opciones_puntaje = $("input[type=radio][name='score']");
  var se_selecciono_puntaje = false;

  opciones_puntaje.each(function () {
    console.log($(this).is(":checked"));
    if ($(this).is(":checked")) {
      se_selecciono_puntaje = true;
      // break bucle each
      return false;
    }
    // ver si hay al menos una opción seleccionada (checked)
  });

  // Si uno de los dos campos está vacío arroja error
  if (nombre_pelicula === "" || director === "" || !se_selecciono_puntaje) {
    $(".error-message").css("display", "flex");
    $(".error-message .text").append("<p>Por favor complete todos los campos en blanco.</p>");
    formulario_es_valido = false;
  }

  return formulario_es_valido;
}
