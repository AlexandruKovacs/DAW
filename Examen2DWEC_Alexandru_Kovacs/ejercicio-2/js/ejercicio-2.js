const productoSelect = document.getElementById('productos');
const stockSelect = document.getElementById('stocks');
const botonMostrar = document.getElementById('mostrarSeleccion');
const seleccion = document.getElementById('seleccion');
const formulario = document.getElementById('formulario');

const xhttp = new XMLHttpRequest();

xhttp.onreadystatechange = function() {

    if (xhttp.readyState === 4 && xhttp.status === 200) {
        
        let datos = JSON.parse(xhttp.responseText);

        actualizarProductos(datos);
        productoSelect.addEventListener('change', function() { actualizarStock(datos); });
    }
};

xhttp.open('GET', 'ejercicio-2.json', true);
xhttp.send();


function actualizarProductos(datos) {
    for (let i = 0; i < datos.productos.length; i++) {
        let option = document.createElement('option');

        option.value = datos.productos[i].producto;
        option.text = datos.productos[i].producto;

        productoSelect.appendChild(option);
    }
}

function actualizarStock(datos) {
    let producto = productoSelect.value;
    let stocks = [];

    for (let i = 0; i < datos.productos.length; i++) {
        if (datos.productos[i].producto === producto) {
            stocks = datos.productos[i].stocks;
        }
    }

    stockSelect.innerHTML = '';

    if (producto == '') {
        stockSelect.disabled = true;
    } else {
        stockSelect.disabled = false;
    }

    let option = document.createElement('option');

    option.value = '';
    option.text = 'Elija un stock';

    stockSelect.appendChild(option);

    for (var i = 0; i < stocks.length; i++) {
        let option = document.createElement('option');

        option.value = stocks[i];
        option.text = stocks[i];
        
        stockSelect.appendChild(option);
    }
}

formulario.addEventListener('submit', function(e) {
    e.preventDefault();

    let datos = new FormData(formulario);

    xhttp.open('POST', 'ejercicio-2.php', true);
    xhttp.onreadystatechange = function() {

        if (xhttp.readyState === 4 && xhttp.status === 200) {

            let datosEnvio = JSON.parse(xhttp.responseText);

            seleccion.innerHTML = `
                <p>Tu producto: ${datosEnvio.producto}.</p>
                <p>Tu stock: ${datosEnvio.stock} unidades.</p>
            `
        }
    };

    xhttp.send(datos);
});