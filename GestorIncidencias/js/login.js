let xhr = new XMLHttpRequest();

formLogin.addEventListener('submit', function(e) {
    e.preventDefault();

    const usuario = document.getElementById('usuario').value;
    const password = document.getElementById('password').value;

    if (usuario.trim() === '' || password.trim() === '') {
        mensaje.style.display = 'block';
        mensaje.innerHTML = 'Todos los campos son obligatorios.';
        return;
    }

    const url = 'server/iniciar-sesion.php';
    const data = `usuario=${usuario}&password=${password}`;
  
    xhr.open('POST', url);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = () => {
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