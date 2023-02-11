const filtroPrecio = document.getElementById('filtroPrecio');
const filtroProveedor = document.getElementById('filtroProveedor');
const filtroCantidad = document.getElementById('filtroCantidad');
const tablaArticulos = document.getElementById('tablaArticulos');
const cajaTabla = document.getElementById('cajaTabla');
const botonOpciones = document.getElementById('botonOpciones');
const masOpciones = document.getElementById('masOpciones');
const cajaModificar = document.getElementById('cajaModificar');
const cajaAnadir = document.getElementById('cajaAnadir');
const cajaBorrar = document.getElementById('cajaBorrar');
const modificarCantidad = document.getElementById('modificarCantidad');
const anadirArticulo = document.getElementById('anadirArticulo');
const borrarArticulo = document.getElementById('borrarArticulo');
const actualizar = document.getElementById('actualizar');
const cerrarModificar = document.getElementById('cerrarModificar');
const cerrarAnadir = document.getElementById('cerrarAnadir');
const cerrarBorrar = document.getElementById('cerrarBorrar');

let xhr = new XMLHttpRequest();

document.addEventListener('DOMContentLoaded', function(){
    masOpciones.style.display = 'none';
    cajaModificar.style.display = 'none';
    cajaAnadir.style.display = 'none';
    cajaBorrar.style.display = 'none';
    cajaTabla.style.visibility = 'hidden';
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

            cajaTabla.style.visibility = 'visible';

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

            cajaTabla.style.visibility = 'visible';

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

            cajaTabla.style.visibility = 'visible';

        }
    };
    xhr.send();
});


botonOpciones.addEventListener('click', function (e) {
    e.preventDefault();
    let icon = botonOpciones.querySelector('i');

    if (icon.classList.contains('fa-arrow-down')) {
        icon.classList.remove('fa-arrow-down');
        icon.classList.add('fa-arrow-up');
        masOpciones.style.display = 'block';
    } else {
        icon.classList.remove('fa-arrow-up');
        icon.classList.add('fa-arrow-down');
        masOpciones.style.display = 'none';
    }
});

modificarCantidad.addEventListener('click', function () {
    cajaModificar.style.display = 'block';
    cajaAnadir.style.display = 'none';
    cajaBorrar.style.display = 'none';
});

anadirArticulo.addEventListener('click', function () {
    cajaModificar.style.display = 'none';
    cajaAnadir.style.display = 'block';
    cajaBorrar.style.display = 'none';
});

borrarArticulo.addEventListener('click', function () {
    cajaModificar.style.display = 'none';
    cajaAnadir.style.display = 'none';
    cajaBorrar.style.display = 'block';
});

cerrarModificar.addEventListener('click', function () {
    cajaModificar.style.display = 'none';
});

cerrarAnadir.addEventListener('click', function () {
    cajaAnadir.style.display = 'none';
});

cerrarBorrar.addEventListener('click', function () {
    cajaBorrar.style.display = 'none';
});