<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 | Alexandru Kovacs</title>
</head>
<body>
    <div>
        <form>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">

            <label for="producto">
                Seleccione un producto
                <input list="productos">
            </label>
            <datalist id="productos">
                <?php
                    include('functions.php');

                    $consulta = 'SELECT * FROM productos';
                    $resultado = ConexionBBDD($consulta);
                    while($fila = mysqli_fetch_object($resultado)) {
                ?>
                    <option value="<?php echo $fila->id; ?>"><?php echo $fila->nombreProd; ?></option>
                <?php } ?>
            </datalist>

            <button id="enviar">Enviar pedido</button>
        </form>
    </div>

    <div id="pedido"></div>

    <script src="js/main.js"></script>
</body>
</html>