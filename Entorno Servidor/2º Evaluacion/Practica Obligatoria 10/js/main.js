let selectCategoria = document.getElementById('categoria');
let selectProducto = document.getElementById('producto');
let pedido = document.getElementById('pedido');

// xhr = new XMLHttpRequest();
// xhr.open('POST', 'insertar-datos.php', true);
// xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

// xhr.onreadystatechange = function() {
//     if(xhr.readyState === 4 && xhr.status === 200) {

//         selectCategoria.addEventListener('change', function() { actualizarProductos(); });
//     }
// };

// xhr.send(`nombre=${nombre}&apellidos=${apellidos}`);


selectCategoria.addEventListener('change', function(event) {
  let idCategoria = event.target.value;
  let xhr = new XMLHttpRequest();

  xhr.open('GET', 'consulta-productos.php?idCategoria=' + idCategoria);

  xhr.onload = function() {
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
