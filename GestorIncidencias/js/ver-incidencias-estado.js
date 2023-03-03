const estado = document.getElementById('estado').value;
const boton = document.getElementById("miBoton");
const modal = document.getElementById("miModal");
const cerrarModal = document.getElementById("cerrarModal");

obtenerIncidenciasPorEstado(estado);

boton.addEventListener("click", function() {
  modal.style.display = "block";
});

cerrarModal.addEventListener("click", function() {
  modal.style.display = "none";
});