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
const modificar = document.getElementById('modificar');
const anadir = document.getElementById('anadir');
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
            document.getElementById('proveedor').innerHTML = xhr.responseText;

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

            const datoCantidad = document.getElementById('datoCantidad');

            const input = document.createElement('input');
            input.type = 'number';
            input.id = 'nuevaCantidad';
            input.className = 'form-control';
            input.required = true;
            input.value = xhr.responseText;

            datoCantidad.insertBefore(input, datoCantidad.childNodes[0]);
        }
    };

    document.getElementById('cajaCantidad').style.display = 'none';
    document.getElementById('datoCantidad').innerHTML = '';
    xhr.send();

});

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

    document.getElementById('cajaCantidad').style.display = 'none';
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
    respuesta.innerHTML = '';

    obtenerArticulos(articuloBorrar);

    cajaModificar.style.display = 'none';
    cajaAnadir.style.display = 'none';
    cajaBorrar.style.display = 'block';
});

cerrarModificar.addEventListener('click', function (event) {
    event.preventDefault();
    cajaModificar.style.display = 'none';
});

cerrarAnadir.addEventListener('click', function () {
    cajaAnadir.style.display = 'none';
});

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

function modificarCantidadSeleccionada(event) {
    event.preventDefault();
    let idArticulo = articuloModificar.value;
    let nuevaCantidad = document.getElementById('nuevaCantidad').value;

    xhr.open('GET', `modificar-cantidad.php?idArticulo=${idArticulo}&nuevaCantidad=${nuevaCantidad}`);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {

            respuesta.innerHTML = xhr.responseText;
            esconderTodosForms();
            obtenerArticulos(articuloModificar);

        }
    };
    xhr.send();
}

function anadirArticuloIntroducido(event) {
    event.preventDefault();
    let nombre = document.getElementById('nombre').value;
    let descripcion = document.getElementById('descripcion').value;
    let precio = document.getElementById('precio').value;
    let cantidad = document.getElementById('cantidad').value;
    let idProveedor = document.getElementById('proveedor').value;

    xhr.open('GET', `insertar-articulo.php?
                    nombre=${nombre}&
                    descripcion=${descripcion}&
                    precio=${precio}&
                    cantidad=${cantidad}&
                    idProveedor=${idProveedor}`);

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {

            respuesta.innerHTML = xhr.responseText;
            esconderTodosForms();
            obtenerArticulos(articuloModificar);

        }
    };
    xhr.send();
}

borrar.addEventListener('click', borrarArticuloSeleccionado);
modificar.addEventListener('click', modificarCantidadSeleccionada);
anadir.addEventListener('click', anadirArticuloIntroducido);