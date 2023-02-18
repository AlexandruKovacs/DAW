
document.addEventListener('DOMContentLoaded', function() {
    obtenerDepartamentos();
});

formLogin.addEventListener('submit', function(e) {
    e.preventDefault();

    const usuario = document.getElementById('usuario').value;
    const password = document.getElementById('password').value;

    mensaje.style.display = 'block';

    if (usuario.trim() === '' || password.trim() === '') {
        mensaje.innerHTML = 'Todos los campos son obligatorios.';
        return;
    }

    const url = 'server/iniciar-sesion.php';
    const data = `usuario=${usuario}&password=${password}`;
  
    xhr.open('POST', url);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
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