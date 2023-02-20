obtenerTiposIncidencias();
obtenerAulas();
obtenerGrupos();

aula.addEventListener('change', function() {

    const selectedOption = document.querySelector(`#aulas option[value='${aula.value}']`);

    if (selectedOption && selectedOption.textContent.startsWith('Aula')) {
        grupo.value = '';
        grupo.placeholder = '';
        grupo.disabled = false;
    } else {
        grupo.value = null;
        grupo.placeholder = '-';
        grupo.disabled = true;
    }

});

formIncidencia.addEventListener('submit', function(event) {
    event.preventDefault();

    if (grupo.value !== null) {
        if (tipo.value.trim() === '' || aula.value.trim() === '' || 
        fecha.value.trim() === '' || descripcion.value.trim() === '') {
            mensaje.style.display = 'block';
            mensaje.innerHTML = 'Todos los campos son obligatorios.';
            return;
        }

        if (!/^[a-zA-Z0-9\s.,;:'"!?()\[\]\{\}\-]{30,200}$/.test(descripcion.value)) {
            mensaje.style.display = 'block';
            mensaje.innerHTML = 'La descripción debe tener entre 30 y 200 caracteres alfanuméricos.';
            return;
        }
    }

    const url = 'server/crear-incidencia.php';
    const data = `tipo=${tipo.value}&aula=${aula.value}&grupo=${grupo.value}&fecha=${fecha.value}&descripcion=${descripcion.value}`;
  
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
