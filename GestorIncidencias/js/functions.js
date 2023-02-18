let xhr = new XMLHttpRequest();

function obtenerDepartamentos() {
    xhr.open('GET', 'server/obtener-departamentos.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {

            let datos = JSON.parse(xhr.responseText);
            console.log(xhr.responseText);

            datos.forEach(departamento => {
                const option = document.createElement('option');

                option.value = departamento.id;
                option.text = departamento.nombre_departamento;

                departamentoSelect.appendChild(option);
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

function validarNombre() {
    if (!/^[A-Z][a-z]*( [A-Z][a-z]*)*$/.test(nombre.value)) {
        mensaje.innerHTML = 'El nombre debe empezar por mayúscula y no contener caracteres especiales.';
        mensaje.style.display = 'block';
    } else {
        mensaje.style.display = 'none';
        mensaje.innerHTML = '';
    }
}

function validarApellidos() {
    if (!/^[A-Z][a-z]*( [A-Z][a-z]*)*$/.test(apellidos.value)) {
        mensaje.innerHTML = 'Los apellidos deben empezar por mayúscula y no contener caracteres especiales.';
        mensaje.style.display = 'block';
    } else {
        mensaje.style.display = 'none';
        mensaje.innerHTML = '';
    }
}

function validarCorreo() {
    if (!/^[a-zA-Z0-9._%+-]+@educa\.madrid\.org$/.test(correo.value)) {
        mensaje.style.display = 'block';
        mensaje.innerHTML = 'El correo debe terminar en @educa.madrid.org';
    } else {
        mensaje.style.display = 'none';
        mensaje.innerHTML = '';
    }
}

function validarUsuario() {
    if (!/^[a-zA-Z0-9._-]{3,20}$/.test(usuario.value)) {
        mensaje.style.display = 'block';
        mensaje.innerHTML = 'El usuario debe contener entre 3 y 20 caracteres alfanuméricos.';
    } else {
        mensaje.style.display = 'none';
        mensaje.innerHTML = '';
    }
}

function validarPassword() {
    if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/.test(password.value)) {
        mensaje.style.display = 'block';
        mensaje.innerHTML = 'La contraseña debe tener una letra mayúscula, una letra minúscula, un dígito y una logitud de 8 caracteres.';
    } else {
        mensaje.style.display = 'none';
        mensaje.innerHTML = '';
    }
}

function validarPassword2() {
    if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/.test(password2.value)) {
        mensaje.style.display = 'block';
        mensaje.innerHTML = 'La contraseña debe tener una letra mayúscula, una letra minúscula, un dígito y una longitud de 8 caracteres.';
    } else {
        mensaje.style.display = 'none';
        mensaje.innerHTML = '';
    }

    if (password.value !== password2.value) {
        mensaje.style.display = 'block';
        mensaje.innerHTML = 'Las contraseñas no coinciden.';
    } else {
        mensaje.style.display = 'none';
        mensaje.innerHTML = '';
    }
}