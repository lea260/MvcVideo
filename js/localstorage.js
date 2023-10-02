// Guardar un valor en localStorage
localStorage.setItem("nombreUsuario", "Juan");
// Recuperar un vallor de locaStorage
var nombre = localStorage.getItem("nombreUsuario");

// Verificar si la clave existe antes de recuperarla
if (nombre !== null) {
  console.log("Nombre de usuario: " + nombre);
} else {
  console.log("La clave 'nombreUsuario' no está definida en localStorage.");
}
