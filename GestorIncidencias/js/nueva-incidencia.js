obtenerTiposIncidencias();
obtenerAulas();
obtenerGrupos();

// inputAulas.addEventListener('input', function() {
//     const aulaSeleccionada = datalistAulas.querySelector(`option[value="${inputAulas.value}"]`);
//     if (aulaSeleccionada) {
//         inputAulas.value = aulaSeleccionada.innerText;
//     }
// });

// inputGrupos.addEventListener('input', function() {
//     const grupoSeleccionado = datalistGrupos.querySelector(`option[value="${inputGrupos.value}"]`);
//     if (grupoSeleccionado) {
//         inputGrupos.value = grupoSeleccionado.innerText;
//     }
// });

aula.addEventListener('change', function() {

    if (!/^(10|[1-9])$/.test(aula.value)) {
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
