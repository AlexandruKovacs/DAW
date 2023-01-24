addEventListener('load', inciciarEvento, false);
let xhr;

function inciciarEvento() {
    let boton = document.getElementById("validarDatos");
    boton.addEventListener('click', validarDatos, false);
}

function validarDatos() {
    
    let fecha = document.getElementById("fechaNacimiento").value;
    let cp = document.getElementById("cp").value;
    let telefono = document.getElementById("telefono").value;

    let principal = document.getElementById("principal");

    xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {

        if(xhr.readyState == 4 && xhr.status == 200) {
            let datos = JSON.parse(xhr.responseText);
    
            let salida = `<p>${datos.resFecha}</p>`;
            salida = salida + `<p>${datos.resCodPostal}</p>`;
            salida = salida + `<p>${datos.resTelefono}</p>`;
    
            principal.innerHTML = salida;
        }
    }
    
    xhr.open('GET', `datos.php?fecha=${fecha}&codigopostal=${cp}&telefono=${telefono}`, false);
    xhr.send();
}