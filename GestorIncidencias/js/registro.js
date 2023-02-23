obtenerDepartamentos();

formRegister.addEventListener('submit', function(event) {
    event.preventDefault();

    if (nombre.value.trim() === '' || apellidos.value.trim() === '' || 
        correo.value.trim() === '' || usuario.value.trim() === '' || 
        password.value.trim() === '' || password2.value.trim() === '' || departamentoSelect.value === '') {

        mensaje.style.display = 'block'; 
        mensaje.innerHTML = 'Todos los campos son obligatorios.';
        return false;
    } else {
        mensaje.style.display = 'none'; 
    }

    if (!/^[A-Z][a-z]*( [A-Z][a-z]*)*$/.test(nombre.value)) {
        mensaje.style.display = 'block';
        mensaje.innerHTML = 'El nombre debe empezar por mayúscula y no contener caracteres especiales.';
        return false;
    } else {
        mensaje.style.display = 'none'; 
    }

    if (!/^[A-Z][a-z]*( [A-Z][a-z]*)*$/.test(apellidos.value)) {
        mensaje.style.display = 'block';
        mensaje.innerHTML = 'Los apellidos deben empezar por mayúscula y no contener caracteres especiales.';
        return false;
    } else {
        mensaje.style.display = 'none'; 
    }

    if (!/^[a-zA-Z0-9._%+-]+@educa\.madrid\.org$/.test(correo.value)) {
        mensaje.style.display = 'block';
        mensaje.innerHTML = 'El correo debe terminar en @educa.madrid.org';
        return false;
    } else {
        mensaje.style.display = 'none'; 
    }

    if (!/^[a-zA-Z0-9._-]{3,20}$/.test(usuario.value)) {
        mensaje.style.display = 'block';
        mensaje.innerHTML = 'El usuario debe contener entre 3 y 20 caracteres alfanuméricos.';
        return false;
    } else {
        mensaje.style.display = 'none'; 
    }

    if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/.test(password.value)) {
        mensaje.style.display = 'block';
        mensaje.innerHTML = 'La contraseña debe tener una letra mayúscula, una letra minúscula, un dígito y una longitud de 8 caracteres.';
        return false;
    } else {
        mensaje.style.display = 'none'; 
    }

    if (password.value !== password2.value) {
        mensaje.style.display = 'block';
        mensaje.innerHTML = 'Las contraseñas no coinciden.';
        return false;
    } else {
        mensaje.style.display = 'none'; 
    }
    
    const url = 'server/registrar-usuario.php';
    const data = `nombre=${nombre.value}&apellidos=${apellidos.value}&correo=${correo.value}&usuario=${usuario.value}&password=${password.value}&departamento=${departamentoSelect.value}`;
  
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

showPassword.addEventListener('click', togglePassword);
showPassword2.addEventListener('click', togglePassword2);