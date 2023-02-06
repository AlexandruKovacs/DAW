const formulario = document.getElementById('formulario');
const botonInput = document.getElementById('botonInput');
const botonPassword = document.getElementById('botonPassword');
const botonCheckbox = document.getElementById('botonCheckbox');
const botonSubmit = document.getElementById('botonSubmit');
const botonTabla = document.getElementById('botonTabla');
const contenedor = document.getElementById('contenedor');


function crearInput() {
    const input = document.createElement('input');

    input.type = 'text';
    input.name = prompt('Introduce el nombre del input tipo texto: ');

    formulario.appendChild(input);
}

function crearPassword() {
    const password = document.createElement('input');

    password.type = 'password';
    password.name = prompt('Introduce el nombre del input tipo password: ');

    formulario.appendChild(password);
}

function crearCheckbox() {
    const checkbox = document.createElement('input');

    checkbox.type = 'checkbox';
    checkbox.name = prompt('Introduce el nombre del checkbox: ');
    checkbox.value = prompt('Introduce el valor del checkbox: ');

    formulario.appendChild(checkbox);
}

function crearSubmit() {
    const submit = document.createElement('input');

    submit.type = 'submit';
    submit.name = prompt('Introduce el nombre del submit: ');
    submit.value = prompt('Introduce el valor del submit: ');

    formulario.appendChild(submit);
}

function crearTabla() {
    const tabla = document.createElement('table');

    let filas = parseInt(prompt('Introduce el número de filas (máx. 10): '));

    while (filas > 10) {
        alert('El número de filas debe ser entre 0 y 10.');
        filas = parseInt(prompt('Por favor, introduce de nuevo el número de filas (máx. 10): '));
    }

    let columnas = parseInt(prompt('Introduce el número de columnas (máx 10): '));

    while (columnas > 10) {
        alert('El número de columnas debe ser entre 0 y 10.');
        columnas = parseInt(prompt('Por favor, introduce de nuevo el número de columnas (máx 10): '));
    }

    // CREAR TABLA
    for (let i = 0; i < filas; i++) {

        let fila = document.createElement('tr');

        for (let j = 0; j < columnas; j++) {
            
            let  columna = document.createElement('td');
            columna.innerHTML = '*';
            fila.appendChild(columna);

        }

        tabla.appendChild(fila);
    }

    contenedor.appendChild(tabla);

    // CREAR BOTON FILA INICIO
    const botonFilaInicio = document.createElement('button');
    botonFilaInicio.innerHTML = 'Añadir fila al principio';

    botonFilaInicio.onclick = function() {
            
        let nuevaFila = document.createElement('tr');
        for (let i = 0; i < columnas; i++) {

            let nuevaColumna = document.createElement('td');
            nuevaColumna.innerHTML = '*';
            nuevaFila.appendChild(nuevaColumna);

        }

        nuevaFila.style.backgroundColor = 'red';
        tabla.insertBefore(nuevaFila, tabla.firstChild);
    };

    // CREAR BOTON FILA FINAL
    const botonFilaFinal = document.createElement('button');
    botonFilaFinal.innerHTML = 'Añadir fila al final';

    botonFilaFinal.onclick = function() {
        
        let nuevaFila = document.createElement('tr');
        for (let i = 0; i < columnas; i++) {

            let nuevaColumna = document.createElement('td');
            nuevaColumna.innerHTML = '*';
            nuevaFila.appendChild(nuevaColumna);

        }

        nuevaFila.style.backgroundColor = 'green';
        tabla.appendChild(nuevaFila);
    };

    const contenedorBotones = document.createElement('div');

    contenedorBotones.id = 'contenedorBotones';
    contenedorBotones.appendChild(botonFilaInicio);
    contenedorBotones.appendChild(botonFilaFinal);

    contenedor.appendChild(contenedorBotones);

}

botonInput.addEventListener('click', crearInput);
botonPassword.addEventListener('click', crearPassword);
botonCheckbox.addEventListener('click', crearCheckbox);
botonSubmit.addEventListener('click', crearSubmit);
botonTabla.addEventListener('click', crearTabla);