const selectCategoria = document.getElementById('categorias');
const selectProducto = document.getElementById('productos');
const pedido = document.getElementById('pedido');
const datosCompra = document.getElementById('datosCompra');
const infoEnvio = document.getElementById('infoEnvio');
const enviar = document.getElementById('enviar');
const volver = document.getElementById('volver');
const formulario = document.getElementById('formulario');

let xhr = new XMLHttpRequest();

selectCategoria.addEventListener('change', function(event) {
    let idCategoria = event.target.value;

    xhr.open('POST', 'consulta-productos.php?idCategoria=' + idCategoria);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {

            let productos = JSON.parse(xhr.responseText);

            selectProducto.innerHTML = '';

            productos.forEach(function(producto) {

                let option = document.createElement('option');
                option.textContent = producto;
                option.value = producto;

                selectProducto.appendChild(option);
            });
        }
    };
    xhr.send();
});

selectProducto.addEventListener('change', function() {

    if (selectProducto.selectedOptions.length > 3) {
        selectProducto.selectedOptions[3].selected = false;
    }

    datosCompra.style.display = 'block';
});

formulario.addEventListener('submit', function(e) {
    e.preventDefault();
    let datos = new FormData(formulario);

    xhr.open('POST', 'insertar-datos.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {

            let datosEnvio = JSON.parse(xhr.responseText);
            
            formulario.style.display = 'none';
            pedido.style.display = 'block';
            pedido.className = 'd-block justify-content-center text-center mt-4';

            infoEnvio.innerHTML = `
                <p>Tus productos: ${datosEnvio.productos}</p>
                <p>Dirección de entrega: ${datosEnvio.direccion}</p>
                <p>Código de envío: ${datosEnvio.codigoEnvio}</p>
            `
            infoEnvio.className = 'mt-4';
        }
    };
    xhr.send(datos);
});

volver.addEventListener('click', function() {
    location.reload(); 
});