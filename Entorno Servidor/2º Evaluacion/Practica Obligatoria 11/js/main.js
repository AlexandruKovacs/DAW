const filtroPrecio = document.getElementById('filtroPrecio');
const filtroProveedor = document.getElementById('filtroProveedor');
const filtroCantidad = document.getElementById('filtroCantidad');
const tablaArticulos = document.getElementById('tablaArticulos');
const cajaTabla = document.getElementById('cajaTabla');

let xhr = new XMLHttpRequest();

document.addEventListener('DOMContentLoaded', function(){
    cajaTabla.style.display = 'none';
});

filtroPrecio.addEventListener('change', function(event) {
    let precio = event.target.value;

    xhr.open('GET', `consulta-precios.php?precio=${precio}`);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let articulosFiltrados = xhr.responseText;

            const tbody = document.querySelector('tbody');
            tbody.innerHTML = '';
            tbody.innerHTML = articulosFiltrados;

            cajaTabla.style.display = 'block';

        }
    };
    xhr.send();
});

filtroProveedor.addEventListener('change', function(event) {
    let idProveedor = event.target.value;

    xhr.open('GET', `consulta-proveedores.php?idProveedor=${idProveedor}`);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let articulosFiltrados = xhr.responseText;

            const tbody = document.querySelector('tbody');
            tbody.innerHTML = '';
            tbody.innerHTML = articulosFiltrados;

            cajaTabla.style.display = 'block';

        }
    };
    xhr.send();
});

filtroCantidad.addEventListener('change', function(event) {
    let cantidad = event.target.value;

    xhr.open('GET', `consulta-cantidad.php?cantidad=${cantidad}`);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let articulosFiltrados = xhr.responseText;

            const tbody = document.querySelector('tbody');
            tbody.innerHTML = '';
            tbody.innerHTML = articulosFiltrados;

            cajaTabla.style.display = 'block';

        }
    };
    xhr.send();
});