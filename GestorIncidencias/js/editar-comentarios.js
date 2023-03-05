const urlParams = new URLSearchParams(window.location.search);
const idIncidencia = urlParams.get('id');

fetch(`server/obtener-comentarios.php?idIncidencia=${idIncidencia}`, {
    method: 'GET',
    idIncidencia: idIncidencia
})
    .then(response => response.json())
    .then(data => {
        document.getElementById('comentarios').value = data.comentarios;
    })
.catch(error => console.error(error));


formComentarios.addEventListener('submit', function(event) {
    event.preventDefault();

    if (!/^[ÁÉÍÓÚáéíóúÑñÜü¡¿çÇ\w\d\s.,:?!()]{30,200}$/.test(comentarios.value)) {
        mensaje.style.display = 'block';
        mensaje.innerHTML = 'Los comentarios deben tener entre 30 y 200 caracteres alfanuméricos.';
        return;
    }

    const url = 'server/modificar-comentarios.php';
    const data = `comentarios=${comentarios.value}&idIncidencia=${idIncidencia}`;
  
    xhrComentarios.open('POST', url);
    xhrComentarios.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhrComentarios.onreadystatechange = function() {
        if (xhrComentarios.readyState === 4 && xhrComentarios.status === 200) {
            const response = JSON.parse(xhrComentarios.responseText);

            if (response.success) {
                mainEditar.style.display = 'none';
                cajaCorrecto.style.display = 'grid';
            } else {
                mensaje.style.display = 'block';
                mensaje.innerHTML = response.message;
            }
        }
    };
    xhrComentarios.send(data);
});
