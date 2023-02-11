<?php

require_once 'bootstrap.php';
require_once './entities/Articulos.php';
require_once './entities/Proveedor.php';

$selectProveedor = $entityManager->createQuery('SELECT pro FROM Proveedor pro');
$proveedores = $selectProveedor->getResult();

$selectArticulos = $entityManager->createQuery('SELECT art FROM Articulos art');
$articulos = $selectArticulos->getResult();

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
    <h2 class="mt-3 mb-5">AlmaGest</h2>
    <div class="container mb-4">
        <form id="formFiltros">

            <div class="form-group d-flex align-items-center">
                <label for="filtroPrecio" class="w-25 text-end me-2">Filtrar por precio:</label>
                <select id="filtroPrecio" class="form-control w-25">
                    <option value="">Todos</option>
                    <option value="0"><10€</option>
                    <option value="1">10-50€</option>
                    <option value="2">50-100€</option>
                    <option value="3">100-200€</option>
                    <option value="4">>200€</option>
                </select>

                <label for="filtroProveedor" class="w-25 text-end me-2">Filtrar por proveedor:</label>
                <select id="filtroProveedor" class="form-control w-25">
                    <option value="">Todos</option>
                    <?php foreach ($proveedores as $proveedor) : ?>
                    <option value="<?php echo $proveedor->getId(); ?>"><?php echo $proveedor->getNombre(); ?></option>
                    <?php endforeach; ?>
                </select>
                
                <label for="filtroCantidad" class="w-25 text-end me-2">Filtrar por cantidad:</label>
                <select id="filtroCantidad" class="form-control w-25">
                    <option value="">Todos</option>
                    <option value="0"><10 uds</option>
                    <option value="1">10-50 uds</option>
                    <option value="2">50-100 uds</option>
                    <option value="3">100-200 uds</option>
                    <option value="4">>200 uds</option>
                </select>

                <button class="btn btn-primary ms-3" id="botonOpciones"><i class="fa-sharp fa-solid fa-arrow-down"></i></button>
            </div>
        </form>
    </div>

    <div id="masOpciones">
        <button class="btn btn-warning" id="modificarCantidad">Modificar cantidad <i class="fa-solid fa-pen-to-square"></i></button>
        <button class="btn btn-success" id="anadirArticulo">Añadir artículo <i class="fa-solid fa-plus"></i></button>
        <button class="btn btn-danger" id="borrarArticulo">Borrar artículo <i class="fa-solid fa-trash"></i></button>
    </div>

    <div class="container w-25 justify-content-center" id="cajaModificar">
        <h5 class="text-center mb-4">Modificar artículo</h5>
        <form id="formModificar">

            <label for="articuloModificar">Selecciona el articulo:</label>
            <select id="articuloModificar" class="form-control mb-3" required>
                <option value="">Selecciona un artículo</option>
                <?php foreach ($articulos as $articulo) : ?>
                    <option value="<?php echo $articulo->getId(); ?>">
                    <?php echo $articulo->getNombre() . ' - ' .  $articulo->getCantidad() . ' unidades'; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <div id="cajaCantidad">
                <label for="cantidadModificar">Nueva cantidad:</label>
                <div class="d-flex gap-2">
                    <input type="number" class="form-control" value="2" required>
                    <button class="btn btn-success w-25" id="actualizarCantidad"><i class="fa-solid fa-check"></i></button>
                    <button class="btn btn-danger" id="cerrarModificar"><i class="fa-solid fa-xmark"></i></button>
                </div>
            </div>
        </form>
    </div>

    <div class="container w-25 justify-content-center" id="cajaAnadir">
        <h5 class="text-center mb-4">Añadir articulo</h5>
        <form id="formAnadir">

            <label for="articuloAnadir">Selecciona el articulo:</label>
            <select id="articuloAnadir" class="form-control mb-3" required>
                <option value="">Selecciona un artículo</option>
                <?php foreach ($articulos as $articulo) : ?>
                    <option value="<?php echo $articulo->getId(); ?>">
                    <?php echo $articulo->getNombre() . ' - ' .  $articulo->getCantidad() . ' unidades'; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <div id="cantidadAnadir">
                <label for="cantidadAnadir">Nueva cantidad:</label>
                <div class="d-flex gap-2">
                    <input type="number" class="form-control" value="2" required>
                    <button class="btn btn-success w-25" id="actualizarAnadir"><i class="fa-solid fa-check"></i></button>
                    <button class="btn btn-danger" id="cerrarAnadir"><i class="fa-solid fa-xmark"></i></button>
                </div>
            </div>
        </form>
    </div>

    <div class="container w-25 justify-content-center" id="cajaBorrar">
        <h5 class="text-center mb-4">Borrar articulo</h5>
        <form id="formModificar">

            <label for="articuloModificar">Selecciona el articulo:</label>
            <div class="d-flex gap-2">
                <select id="articuloModificar" class="form-control" required>
                    <option value="">Selecciona un artículo</option>
                    <?php foreach ($articulos as $articulo) : ?>
                        <option value="<?php echo $articulo->getId(); ?>">
                        <?php echo $articulo->getNombre(); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <button class="btn btn-success w-25" id="actualizarBorrar"><i class="fa-solid fa-check"></i></button>
                <button class="btn btn-danger" id="cerrarBorrar"><i class="fa-solid fa-xmark"></i></button>
            </div>
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