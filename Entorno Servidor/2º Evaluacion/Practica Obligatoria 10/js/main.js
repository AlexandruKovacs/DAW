addEventListener('load', inciciarEvento, false);
let xhr;

function inciciarEvento() {
    let boton = document.getElementById('enviar');
    boton.addEventListener('click', enviarDatos, false);
}

function enviarDatos() {
    
    let nombre = document.getElementById('nombre').value;
    let apellidos = document.getElementById('apellidos').value;

    let pedido = document.getElementById('pedido');

    xhr = new XMLHttpRequest();
    xhr.open('POST', 'insertar-datos.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            let datos = JSON.parse(xhr.responseText);
    
            let salida = `<p>${datos.nombre}</p>`;
            salida = salida + `<p>${datos.apellidos}</p>`;

            pedido.innerHTML = salida;
        }
    }

    xhr.send(`nombre=${nombre}&apellidos=${apellidos}`);
}
  