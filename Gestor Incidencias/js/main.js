const departamentoSelect = document.getElementById('departamento');

let xhr = new XMLHttpRequest();

function obtenerDepartamentos() {
    xhr.open('GET', 'server/obtener-departamentos.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {

            let datos = JSON.parse(xhr.responseText);

            console.log(datos);

            datos.forEach(departamento => {
                const option = document.createElement('option');

                option.value = departamento.id;
                option.text = departamento.nombre_departamento;

                departamentoSelect.appendChild(option);
            });

        } else {
            console.error('Error al obtener los datos');
        }
    };
    xhr.send();
}

obtenerDepartamentos();