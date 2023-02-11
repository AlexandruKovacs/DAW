const botonOpciones = document.getElementById('botonOpciones');
const masOpciones = document.getElementById('masOpciones');
const cajaModificar = document.getElementById('cajaModificar');
const cajaAnadir = document.getElementById('cajaAnadir');
const cajaBorrar = document.getElementById('cajaBorrar');
const modificarCantidad = document.getElementById('modificarCantidad');
const anadirArticulo = document.getElementById('anadirArticulo');
const borrarArticulo = document.getElementById('borrarArticulo');
const articuloBorrar = document.getElementById('articuloBorrar');
const articuloModificar = document.getElementById('articuloModificar');
const borrar = document.getElementById('borrar');
const cerrarModificar = document.getElementById('cerrarModificar');
const cerrarAnadir = document.getElementById('cerrarAnadir');
const cerrarBorrar = document.getElementById('cerrarBorrar');
const forms = document.getElementsByTagName('form');
const respuesta = document.getElementById('respuesta');

let xhr = new XMLHttpRequest();

function obtenerProveedores() {
    xhr.open('GET', 'obtener-proveedores.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {

            document.getElementById('filtroProveedor').innerHTML = xhr.responseText;

        }
    };
    xhr.send();
}

obtenerProveedores();

document.getElementById('filtroPrecio').addEventListener('change', function(event) {
    let precio = event.target.value;

    xhr.open('GET', `consulta-precios.php?precio=${precio}`);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let articulosFiltrados = xhr.responseText;

            const tbody = document.querySelector('tbody');
            tbody.innerHTML = '';
            tbody.innerHTML = articulosFiltrados;

            masOpciones.style.display = 'none';

            mostrarTabla();
            esconderTodosForms();
        }
    };
    xhr.send();
});


document.getElementById('filtroProveedor').addEventListener('change', function(event) {
    let idProveedor = event.target.value;

    xhr.open('GET', `consulta-proveedores.php?idProveedor=${idProveedor}`);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let articulosFiltrados = xhr.responseText;

            const tbody = document.querySelector('tbody');
            tbody.innerHTML = '';
            tbody.innerHTML = articulosFiltrados;

            masOpciones.style.display = 'none';

            mostrarTabla();
            esconderTodosForms();
        }
    };
    xhr.send();
});


document.getElementById('filtroCantidad').addEventListener('change', function(event) {
    let cantidad = event.target.value;

    xhr.open('GET', `consulta-cantidad.php?cantidad=${cantidad}`);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            let articulosFiltrados = xhr.responseText;

            const tbody = document.querySelector('tbody');
            tbody.innerHTML = '';
            tbody.innerHTML = articulosFiltrados;

            masOpciones.style.display = 'none';

            mostrarTabla();
            esconderTodosForms();
        }
    };
    xhr.send();
});

articuloModificar.addEventListener('change', function(event) {
    let idArticulo = event.target.value;

    xhr.open('GET', `obtener-cantidad.php?idArticulo=${idArticulo}`);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById('cajaCantidad').style.display = 'block';
            document.getElementById('datoCantidad').innerHTML = xhr.responseText;
        }
    };

    document.getElementById('cajaCantidad').style.display = 'none';
    xhr.send();

});

borrar.addEventListener('click', borrarArticuloSeleccionado);

botonOpciones.addEventListener('click', function (event) {
    event.preventDefault();
    respuesta.innerHTML = '';
    
    let icon = botonOpciones.querySelector('i');
    ocultarTabla();

    if (icon.classList.contains('fa-arrow-down')) {
        icon.classList.remove('fa-arrow-down');
        icon.classList.add('fa-arrow-up');
        masOpciones.style.display = 'flex';
        
    } else {
        icon.classList.remove('fa-arrow-up');
        icon.classList.add('fa-arrow-down');
        masOpciones.style.display = 'none';
        esconderTodosForms();
    }
});

modificarCantidad.addEventListener('click', function () {
    respuesta.innerHTML = '';

    obtenerArticulos(articuloModificar);

    cajaModificar.style.display = 'block';
    cajaAnadir.style.display = 'none';
    cajaBorrar.style.display = 'none';
});

// anadirArticulo.addEventListener('click', function () {
//     cajaModificar.style.display = 'none';
//     cajaAnadir.style.display = 'block';
//     cajaBorrar.style.display = 'none';
// });

borrarArticulo.addEventListener('click', function () {
    respuesta.innerHTML = '';

    obtenerArticulos(articuloBorrar);

    cajaModificar.style.display = 'none';
    cajaAnadir.style.display = 'none';
    cajaBorrar.style.display = 'block';
});

// cerrarModificar.addEventListener('click', function () {
//     cajaModificar.style.display = 'none';
// });

// cerrarAnadir.addEventListener('click', function () {
//     cajaAnadir.style.display = 'none';
// });

cerrarBorrar.addEventListener('click', function (event) {
    event.preventDefault();
    cajaBorrar.style.display = 'none';
});


// FUNCIONES
function esconderTodosForms() {
    cajaModificar.style.display = 'none';
    cajaAnadir.style.display = 'none';
    cajaBorrar.style.display = 'none';
}

function mostrarTabla() {
    document.getElementById('cajaTabla').style.display = 'block';
}

function ocultarTabla() {
    document.getElementById('cajaTabla').style.display = 'none';
}

function obtenerArticulos(select) {
    xhr.open('GET', 'obtener-articulos.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {

            select.innerHTML = xhr.responseText;

        }
    };
    xhr.send();
}

function obtenerCantidad() {

}

function borrarArticuloSeleccionado(event) {
    event.preventDefault();
    let idArticulo = articuloBorrar.value;

    xhr.open('GET', `borrar-articulo.php?idArticulo=${idArticulo}`);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {

            respuesta.innerHTML = xhr.responseText;
            esconderTodosForms();
            obtenerArticulos(articuloBorrar);

        }
    };
    xhr.send();
}
