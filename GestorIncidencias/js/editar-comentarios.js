const urlParams = new URLSearchParams(window.location.search);
const incidenciaId = urlParams.get('id');

fetch(`server/obtener-comentarios.php?idIncidencia=${incidenciaId}`, {
    method: 'GET',
    incidenciaId: incidenciaId
  })
  .then(response => response.json())
  .then(data => {
    document.getElementById('comentarios').value = data.comentarios;
  })
  .catch(error => console.error(error));
