function categorias() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            // Obtenemos el elemento principal
            var principal = document.getElementById('principal');

            // Crear lista
            var lista = document.createElement('ul');

            // Introducimos la lista en el section
            principal.appendChild(lista);

            // Meter los datos de la respuesta en un array
            var cats = JSON.parse(this.response);
            
            // Para cada elemento del array
            for(let i = 0; i < cats.length; i++) {
                
                // Se crea un elemento ul con el campo nombre
                var elemento = document.createElement('li');
                elemento.innerHTML = cats[i]['nombre'];

                // Se añade a la lista
                lista.appendChild(elemento);
            }

            var body = document.getElementById('principal');

            // Eliminar el contenido actual
            body.innerHTML = '';
            body.appendChild(lista);
        }
    };

    xhttp.open('GET', 'datos.php', true);
    xhttp.send();

    // Para que no se siga el link que llama a esta función
    return false;
}