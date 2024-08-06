// Obtén la URL actual
const urlActual = window.location.href;

// Verifica si el parámetro '?' ya está presente en la URL
const parametros = new URLSearchParams(window.location.search);
let carpetaNombre = parametros.get('?');

if (!carpetaNombre) {
  // Si 'nombre' no está presente, genera un número aleatorio
  carpetaNombre = generarCadenaAleatoria();
  // Agrega el parámetro 'nombre' a la URL
  const urlConParametro = urlActual.includes('?')
    ? `${urlActual}&?=${carpetaNombre}`
    : `${urlActual}??=${carpetaNombre}`;
  // Redirige a la nueva URL con el parámetro 'nombre'
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



