const urlActual = window.location.href;

const parametros = new URLSearchParams(window.location.search);
let carpetaNombre = parametros.get("?");

if (!carpetaNombre) {
  carpetaNombre = generarCadenaAleatoria();
  const urlConParametro = urlActual.includes("?")
    ? `${urlActual}&?=${carpetaNombre}`
    : `${urlActual}??=${carpetaNombre}`;
  window.location.href = urlConParametro;
}

// Función para generar una cadena aleatoria
function generarCadenaAleatoria() {
  const caracteres = "abcdefghijklmnopqrstuvwxyz023456789";
  let cadenaAleatoria = "";
  for (let i = 0; i < 3; i++) {
    const caracterAleatorio = caracteres.charAt(
      Math.floor(Math.random() * caracteres.length)
    );
    cadenaAleatoria += caracterAleatorio;
  }
  return cadenaAleatoria;
}

// Funcion para copiar la URL generada
function copiarURL() {
  let url = document.getElementById("url");
  let button = document.getElementById("botoncopiar");

  navigator.clipboard.writeText(url.textContent);
  button.textContent = "Copiado";
}
