let xhr = new XMLHttpRequest();
let xhrAulas = new XMLHttpRequest();
let xhrCursos = new XMLHttpRequest();
let xhrIncidencias = new XMLHttpRequest();
let xhrIncidenciasEnProceso = new XMLHttpRequest();

function obtenerDepartamentos() {
    xhr.open('GET', 'server/obtener-departamentos.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {

            let departamentos = JSON.parse(xhr.responseText);

            departamentos.forEach(departamento => {
                const option = document.createElement('option');

                option.value = departamento.id;
                option.text = departamento.nombre_departamento;

                departamentoSelect.appendChild(option);
            });
        }
    };
    xhr.send();
}

function obtenerTiposIncidencias() {
    xhr.open('GET', 'server/obtener-tipos-incidencias.php', true);
    xhr.onload = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {

            let tipoSelect = document.getElementById('tipo');
            let tipos = JSON.parse(xhr.responseText);

            tipos.forEach(tipo => {
                const option = document.createElement('option');

                option.value = tipo.id;
                option.text = tipo.tipoIncidencia;

                tipoSelect.appendChild(option);
            });
        }
    };
    xhr.send();
}

function obtenerAulas() {
    xhrAulas.open('GET', 'server/obtener-aulas.php', true);
    xhrAulas.onload = function() {
        if (xhrAulas.readyState === 4 && xhrAulas.status === 200) {

            let aulaSelect = document.getElementById('aulas');
            let aulas = JSON.parse(xhrAulas.responseText);

            aulas.forEach(aula => {
                const option = document.createElement('option');

                option.value = aula.id;
                option.text = aula.nombre;

                aulaSelect.appendChild(option);
            });
        }
    };
    xhrAulas.send();
}

function obtenerGrupos() {
    xhrCursos.open('GET', 'server/obtener-grupos.php', true);
    xhrCursos.onload = function() {
        if (xhrCursos.readyState === 4 && xhrCursos.status === 200) {

            let grupoSelect = document.getElementById('grupos');
            let grupos = JSON.parse(xhrCursos.responseText);

            grupos.forEach(grupo => {
                const option = document.createElement('option');

                option.value = grupo.id;
                option.text = grupo.nombre;

                grupoSelect.appendChild(option);
            });
        }
    };
    xhrCursos.send();
}

function obtenerIncidencias() {

    let idProfesor = document.getElementById('idProfesor').value;
    let tablaIncidencias = document.getElementById('tablaIncidencias');
    let vacio = document.getElementById('vacio');
    let tusIncidencias = document.getElementById('tus-incidencias');

    xhrIncidencias.onreadystatechange = function() {
        if (xhrIncidencias.readyState === 4 && xhrIncidencias.status === 200) {

            let incidencias = JSON.parse(xhrIncidencias.responseText);

            if (incidencias.length === 0) {
                tablaIncidencias.style.visibility = 'hidden';
                vacio.style.visibility = 'visible';
                vacio.style.display = 'grid';
                tusIncidencias.style.display = 'none';
            } else {
                tablaIncidencias.style.visibility = 'visible';
                vacio.style.visibility = 'hidden';
                vacio.style.display = 'none';
                tusIncidencias.style.display = 'block';
            }

            const tbody = document.querySelector('#tablaIncidencias tbody');

            incidencias.forEach(incidencia => {
                const fila = document.createElement('tr');

                const idAula = document.createElement('td');
                idAula.textContent = incidencia.nombreAula;
                fila.appendChild(idAula);

                const idGrupo = document.createElement('td');
                idGrupo.textContent = incidencia.nombreGrupo ? incidencia.nombreGrupo : '-';
                fila.appendChild(idGrupo);

                const tipoIncidencia = document.createElement('td');
                tipoIncidencia.textContent = incidencia.tipoIncidencia;
                fila.appendChild(tipoIncidencia);

                const descripcion = document.createElement('td');
                descripcion.textContent = incidencia.descripcion;
                fila.appendChild(descripcion);

                const fecha = document.createElement('td');

                const datoFecha = new Date(incidencia.fechaCreacion);
                const fechaFormateada = `${datoFecha.getDate()}-${datoFecha.getMonth() + 1}-${datoFecha.getFullYear()}`;
                
                fecha.textContent = fechaFormateada;
                fila.appendChild(fecha);

                const comentarios = document.createElement('td');
                comentarios.textContent = incidencia.comentarios;
                fila.appendChild(comentarios);

                const estado = document.createElement('td');

                if (incidencia.estado === 'Creada') {
                    const elementoEstado = crearElementoEstado('fa-solid fa-folder-plus', incidencia.estado, 'creada');
                    estado.appendChild(elementoEstado);
                } else if (incidencia.estado === 'En proceso') {
                    const elementoEstado = crearElementoEstado('fa-solid fa-clock', incidencia.estado, 'en-proceso');
                    estado.appendChild(elementoEstado);
                } else {
                    const elementoEstado = crearElementoEstado('fa-solid fa-check', incidencia.estado, 'terminada');
                    estado.appendChild(elementoEstado);
                }
                fila.appendChild(estado);

                tbody.appendChild(fila);
            });

        };
    }
    xhrIncidencias.open('GET', `server/obtener-incidencias.php?idProfesor=${idProfesor}`, true);
    xhrIncidencias.send();
   
}

function obtenerIncidenciasPorEstado(estado) {

    let tablaIncidencias = document.getElementById('tablaIncidenciasEstado');
    let vacio = document.getElementById('vacio');

    xhrIncidenciasEnProceso.onreadystatechange = function() {
        if (xhrIncidenciasEnProceso.readyState === 4 && xhrIncidenciasEnProceso.status === 200) {

            let incidencias = JSON.parse(xhrIncidenciasEnProceso.responseText);

            if (incidencias.length === 0) {
                tablaIncidencias.style.visibility = 'hidden';
                vacio.style.visibility = 'visible';
                vacio.style.display = 'grid';
            } else {
                tablaIncidencias.style.visibility = 'visible';
                vacio.style.visibility = 'hidden';
                vacio.style.display = 'none';
            }

            const tbody = document.querySelector('#tablaIncidenciasEstado tbody');

            incidencias.forEach(incidencia => {
                const fila = document.createElement('tr');

                const idAula = document.createElement('td');
                idAula.textContent = incidencia.nombreAula;
                fila.appendChild(idAula);

                const idGrupo = document.createElement('td');
                idGrupo.textContent = incidencia.nombreGrupo ? incidencia.nombreGrupo : '-';
                fila.appendChild(idGrupo);

                const tipoIncidencia = document.createElement('td');
                tipoIncidencia.textContent = incidencia.tipoIncidencia;
                fila.appendChild(tipoIncidencia);

                const descripcion = document.createElement('td');
                descripcion.textContent = incidencia.descripcion;
                fila.appendChild(descripcion);

                const fecha = document.createElement('td');

                const datoFecha = new Date(incidencia.fechaCreacion);
                const fechaFormateada = `${datoFecha.getDate()}-${datoFecha.getMonth() + 1}-${datoFecha.getFullYear()}`;
                
                fecha.textContent = fechaFormateada;
                fila.appendChild(fecha);

                const comentarios = document.createElement('td');
                comentarios.textContent = incidencia.comentarios;
                fila.appendChild(comentarios);

                
                const agregarComentario = document.createElement('i');
                agregarComentario.className = 'fa-solid fa-pen';
                agregarComentario.setAttribute('id', `btn-${incidencia.id}`);
                
                agregarComentario.onclick = function() {
                    const idFila = this.getAttribute('id').split('-')[1];
                    // Aquí puedes realizar la acción deseada utilizando el ID correspondiente de la fila.
                    // Por ejemplo, abrir un cuadro de diálogo para que el usuario ingrese un comentario.
                    alert(`Agregar comentario para el ID ${idFila}`);
                };
                
                const tdBoton = document.createElement('td');
                tdBoton.appendChild(agregarComentario);
                fila.appendChild(tdBoton);

                tbody.appendChild(fila);
            });

        };
    }
    xhrIncidenciasEnProceso.open('GET', `server/obtener-incidencias-estado.php?estado=${estado}`, true);
    xhrIncidenciasEnProceso.send();
   
}

function crearElementoEstado(iconoClass, texto, textoClass) {
    const icono = document.createElement('i');
    const textoElemento = document.createElement('p');
  
    icono.className = iconoClass;
    textoElemento.textContent = texto;
    textoElemento.className = textoClass;
  
    textoElemento.appendChild(icono);
  
    return textoElemento;
}

function togglePassword() {

    if (showPassword.classList.contains('fa-eye')) {
        showPassword.classList.remove('fa-eye');
        showPassword.classList.add('fa-eye-slash');
    } else {
        showPassword.classList.remove('fa-eye-slash');
        showPassword.classList.add('fa-eye');
    }

    if (password.type === 'password') {
      password.type = 'text';
    } else {
      password.type = 'password';
    }
    
}

function togglePassword2() {

    if (showPassword2.classList.contains('fa-eye')) {
        showPassword2.classList.remove('fa-eye');
        showPassword2.classList.add('fa-eye-slash');
    } else {
        showPassword2.classList.remove('fa-eye-slash');
        showPassword2.classList.add('fa-eye');
    }

    if (password2.type === 'password') {
        password2.type = 'text';
    } else {
        password2.type = 'password';
    }

}