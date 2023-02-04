const selectCategoria = document.getElementById('categorias');
const selectProducto = document.getElementById('productos');
const pedido = document.getElementById('pedido');
const datosCompra = document.getElementById('datosCompra');
const datosEnvio = document.getElementById('datosEnvio');
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
            
            formulario.style.display = 'none';
            pedido.style.display = 'block';
            console.log(xhr.responseText);
            
        }
    };
    xhr.send(datos);
});

volver.addEventListener('click', function() {
    location.reload(); 
});