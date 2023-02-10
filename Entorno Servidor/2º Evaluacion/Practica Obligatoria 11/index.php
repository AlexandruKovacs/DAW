<?php

require_once 'bootstrap.php';
require_once './entities/Articulos.php';
require_once './entities/Proveedor.php';

$selectProveedor = $entityManager->createQuery('SELECT pro FROM Proveedor pro');
$proveedores = $selectProveedor->getResult();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlmaGest | Alexandru Kovacs</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="img/php.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body>
    <h2 class="mt-3">Artículos</h2>
    <div class="container d-block w-25 mb-5">
        <form id="form-filtros">
            <label for="filtroPrecio">Filtrar por precio:</label>
            <select id="filtroPrecio" class="form-control mb-3">
                <option value="">Todos</option>
                <option value="bajo">Bajo</option>
                <option value="medio">Medio</option>
                <option value="alto">Alto</option>
            </select>

            <label for="filtroProveedor">Filtrar por proveedor:</label>
            <select id="filtroProveedor" class="form-control mb-3">
                <option value="">Todos</option>
                <?php foreach ($proveedores as $proveedor) : ?>
                <option value="<?php echo $proveedor->getId(); ?>"><?php echo $proveedor->getNombre(); ?></option>
                <?php endforeach; ?>
            </select>

            <label for="filtroCantidad">Filtrar por cantidad:</label>
            <select id="filtroCantidad" class="form-control mb-3">
                <option value="">Todos</option>
                <option value="baja">Baja</option>
                <option value="media">Media</option>
                <option value="alta">Alta</option>
            </select>
        </form>
    </div>
    <div id="cajaTabla">
        <table class="table table-hover table-striped w-75" id="tablaArticulos">
            <thead>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>DESCRIPCIÓN</th>
                <th>PRECIO</th>
                <th>CANTIDAD</th>
                <th>PROVEEDOR</th>
                <th></th>
            </thead>
            <tbody></tbody>
            <tfoot></tfoot>
        </table>
    </div>
    <script src="js/main.js"></script>
</body>
</html>