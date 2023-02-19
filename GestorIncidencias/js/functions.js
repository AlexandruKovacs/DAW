let xhr = new XMLHttpRequest();

function obtenerDepartamentos() {
    xhr.open('GET', 'server/obtener-departamentos.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {

            let departamentos = JSON.parse(xhr.responseText);
            console.log(xhr.responseText);

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
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {

            let tipos = JSON.parse(xhr.responseText);
            console.log(xhr.responseText);

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