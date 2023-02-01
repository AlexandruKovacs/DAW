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
        <form class="w-25">
            <div>
                <label for="categoria">Categoría</label>
                <select name="categoria" id="categoria" class="form-control">
                    <option value="">Selecciona una categoría</option>

                    <?php include('consulta-categoria.php'); ?>
                    <?php while ($categoria = $categorias->fetch_assoc()): ?>
                        <option value="<?php echo $categoria['id'] ?>" id="categoriaSeleccionada">
                        <?php echo $categoria['nombre'] ?>
                        </option>
                    <?php endwhile; ?>

                </select>
            </div>
            <div>
                <label for="producto">Seleccione un producto</label>
                <select name="producto" id="producto" class="form-control"></select>
            </div>
            <div>
                <button id="enviar" class="btn btn-success mt-4">Realizar pedido</button>
            </div>
        </form>
    </div>

    <div id="pedido"></div>

    <script src="js/main.js"></script>
</body>
</html>