formComentarios.addEventListener('submit', function() {

    const idFila = agregarComentario.getAttribute('id').split('-')[1];

    if (!/^[ÁÉÍÓÚáéíóúÑñÜü¡¿çÇ\w\d\s.,:?!()]{30,200}$/.test(comentarios.value)) {
        mensaje.style.display = 'block';
        mensaje.innerHTML = 'Los comentarios deben tener entre 30 y 200 caracteres alfanuméricos.';
        return;
    }

    const url = 'server/crear-comentario.php';
    const data = `comentarios=${comentarios.value}&idIncidencia=${idFila}`;
  
    xhr.open('POST', url);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
            const response = JSON.parse(xhr.responseText);

            if (response.success) {
                window.location.href = response.redirectUrl;
            } else {
                mensaje.style.display = 'block';
                mensaje.innerHTML = response.message;
            }
        }
    };
    xhr.send(data);
});