<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <title>DevShop | Alexandru Kovacs</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2 class="p-5">DevShop <i class="fa-brands fa-shopify"></i></h2>
    <form id="formulario">
        <div class="container d-block justify-content-center text-center w-25">
            <label for="categoria">Categoría</label>
            <select name="categorias" id="categorias" class="form-control mt-2 mb-2" required>
                <option>Selecciona una categoría</option>

                <?php include('consulta-categoria.php'); ?>
                <?php while ($categoria = $categorias->fetch_assoc()): ?>
                    <option value="<?php echo $categoria['id'] ?>" id="categoriaSeleccionada">
                    <?php echo $categoria['nombre'] ?>
                    </option>
                <?php endwhile; ?>

            </select>

            <label for="productos">Seleccione los productos (máx. 3):</label>
            <select multiple name="productos[]" id="productos" class="form-control mt-2 mb-2" required></select>

            <div id="datosCompra" class="mt-4">
            
                <label for="nombre">Nombre del comprador</label>
                <input type="text" name="nombre" id="nombre" class="form-control mt-2 mb-2" required>

                <label for="direccion">Dirección de envío</label>
                <input type="text" name="direccion" id="direccion" class="form-control mt-2 mb-2" required>

                <label for="telefono">Teléfono</label>
                <input type="tel" name="telefono" id="telefono" class="form-control mt-2 mb-2" required>

                <button class="btn btn-success mt-4">Realizar pedido <i class="fa-solid fa-cart-shopping"></i></button>

            </div>
        </div>
    </form>
    <div id="pedido">
        <h3>Pedido enviado correctamente. <i class="fa-solid fa-check"></i></h3>
        <div id="infoEnvio"></div>
        <button id="volver" class="btn btn-success mt-4">Volver a comprar <i class="fa-solid fa-rotate-left"></i></button>
    </div>

    <script src="js/main.js"></script>
</body>
</html>