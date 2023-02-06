const botonReiniciar = document.getElementById('botonReiniciar');
const spanVisitas = document.getElementById('visitas');

let valorVisitas = parseInt(window.sessionStorage.getItem('visitas')) || 0;
spanVisitas.innerText = valorVisitas;

window.sessionStorage.setItem('visitas', ++valorVisitas);

function reiniciarContador () {
    window.sessionStorage.removeItem('visitas');
    spanVisitas.innerText = 0;
}

botonReiniciar.addEventListener('click', reiniciarContador);