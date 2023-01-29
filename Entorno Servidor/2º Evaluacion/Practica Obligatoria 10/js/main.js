addEventListener('load', inciciarEvento, false);
let xhr;

function inciciarEvento() {
    let boton = document.getElementById("enviar");
    boton.addEventListener('click', enviarDatos, false);
}

function enviarDatos() {
    
    let nombre = document.getElementById("nombre").value;
    let apellidos = document.getElementById("apellidos").value;

    xhr = new XMLHttpRequest();
    xhr.open("POST", "insertar-datos.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if(xhr.readyState == 4 && xhr.status == 200) {
            alert("Datos insertados");
        }
    }

    xhr.send(`nombre=${nombre}&apellidos=${apellidos}`);
}
  