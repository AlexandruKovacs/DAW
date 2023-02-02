const selectCategoria = document.getElementById('categorias');
const selectProducto = document.getElementById('productos');
const pedido = document.getElementById('pedido');
const compra = document.getElementById('compra');
const enviar = document.getElementById('enviar');
const formulario = document.getElementById('formulario');

pedido.style.display = 'none';
compra.style.display = 'none';

let xhr = new XMLHttpRequest();

selectCategoria.addEventListener('change', function(event) {
    let idCategoria = event.target.value;

    xhr.open('GET', 'consulta-productos.php?idCategoria=' + idCategoria);
    xhr.onreadystatechange = function() {
        let productos = JSON.parse(xhr.responseText);

        selectProducto.innerHTML = '';

        productos.forEach(function(producto) {

            let option = document.createElement('option');
            option.textContent = producto;
            option.value = producto;

            selectProducto.appendChild(option);
        });
    };
    xhr.send();
});

selectProducto.addEventListener('change', function() {

    if (selectProducto.selectedOptions.length > 3) {
        selectProducto.selectedOptions[3].selected = false;
    }

    compra.style.display = 'block';
});

formulario.addEventListener("submit", function(event) {
    event.preventDefault();
  
    var formData = new FormData(this);
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "insertar-datos.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            formulario.style.display = 'none';
            pedido.style.display = 'block';
        }
    };
    xhr.send(formData);
});