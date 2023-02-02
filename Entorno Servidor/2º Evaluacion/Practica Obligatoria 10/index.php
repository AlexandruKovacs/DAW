<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <title>Ejercicio 1 | Alexandru Kovacs</title>
</head>
<body>
    <div class="container">
        <form id="formulario" class="w-25 p-3">
            <div class="mt-3">
                <label for="categoria">Categoría</label>
                <select name="categorias" id="categorias" class="form-control">
                    <option value="">Selecciona una categoría</option>

                    <?php include('consulta-categoria.php'); ?>
                    <?php while ($categoria = $categorias->fetch_assoc()): ?>
                        <option value="<?php echo $categoria['id'] ?>" id="categoriaSeleccionada">
                        <?php echo $categoria['nombre'] ?>
                        </option>
                    <?php endwhile; ?>

                </select>
            </div>
            <div class="mt-3">
                <label for="productos">Seleccione los productos (máx. 3):</label>
                <select multiple name="productos[]" id="productos" class="form-control"></select>
            </div>
            <div id="compra" class="mt-3">
                <div class="mt-3">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="direccion">Dirección:</label>
                    <input type="text" name="direccion" id="direccion" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="telefono">Teléfono:</label>
                    <input type="tlf" name="telefono" id="telefono" class="form-control">
                </div>
                <div class="mt-3">
                    <button id="enviar" class="btn btn-success mt-4">Realizar pedido</button>
                </div>
            </div>
        </form>
    </div>

    <div id="pedido">
        <h3>Pedido enviado correctamente.</h3>
    </div>

    <script src="js/main.js"></script>
</body>
</html>