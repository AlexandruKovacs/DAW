obtenerDepartamentos();

nombre.addEventListener('change', validarNombre);
apellidos.addEventListener('change', validarApellidos);
correo.addEventListener('change', validarCorreo);
usuario.addEventListener('change', validarUsuario);
password.addEventListener('change', validarPassword);
password2.addEventListener('change', validarPassword2);

formRegister.addEventListener('submit', function(e) {
    e.preventDefault();

    mensaje.style.display = 'block';

    if (nombre.value.trim() === '' || apellidos.value.trim() === '' || 
        correo.value.trim() === '' || usuario.value.trim() === '' || 
        password.value.trim() === '' || password2.value.trim() === '' || departamentoSelect.value === '') {

        mensaje.innerHTML = 'Todos los campos son obligatorios.';
        return;
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
                mensaje.innerHTML = response.message;
            }
        }
    };
    xhr.send(data);
});

showPassword.addEventListener('click', togglePassword);
showPassword2.addEventListener('click', togglePassword2);