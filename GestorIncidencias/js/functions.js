let xhr = new XMLHttpRequest();
let xhrAulas = new XMLHttpRequest();
let xhrCursos = new XMLHttpRequest();
let xhrIncidencias = new XMLHttpRequest();

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

    xhrIncidencias.onreadystatechange = function() {
        if (xhrIncidencias.readyState === 4 && xhrIncidencias.status === 200) {

            let incidencias = JSON.parse(xhrIncidencias.responseText);
            console.log(incidencias);

            const tbody = document.querySelector('#incidencias tbody');

            incidencias.forEach(incidencia => {
                const fila = document.createElement('tr');

                const id = document.createElement('td');
                id.textContent = incidencia.id;
                fila.appendChild(id);

                const idAula = document.createElement('td');
                idAula.textContent = incidencia.idAula;
                fila.appendChild(idAula);

                const idGrupo = document.createElement('td');
                idGrupo.textContent = incidencia.idGrupo ? incidencia.idGrupo : '-';
                fila.appendChild(idGrupo);

                const tipoIncidencia = document.createElement('td');
                tipoIncidencia.textContent = incidencia.tipoIncidencia;
                fila.appendChild(tipoIncidencia);

                const descripcion = document.createElement('td');
                descripcion.textContent = incidencia.descripcion;
                fila.appendChild(descripcion);

                const fecha = document.createElement('td');
                fecha.textContent = incidencia.fechaCreacion;
                fila.appendChild(fecha);

                const estado = document.createElement('td');
                estado.textContent = incidencia.estado;
                fila.appendChild(estado);

                tbody.appendChild(fila);
            });

        };
    }
    xhrIncidencias.open('GET', `server/obtener-incidencias.php?idProfesor=${idProfesor}`, true);
    xhrIncidencias.send();
   
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