<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta | Alexandru Kovacs</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="img/php.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body>
    <h2 class="mt-3">CAMISETAS DE TALLA <?php echo $_POST['talla']; ?></h2>
    <table class="table table-striped w-50 mt-5">
        <tr>
            <th>ID</th>
            <th>TALLA</th>
            <th>PRECIO</th>
            <th>MARCA</th>
            <th>COLOR</th>
        </tr>
        <?php
            include("funciones.php");
            $talla = $_POST['talla'];

            $consultaCamisetas = "SELECT * FROM camiseta WHERE talla=$talla";
            $resultado = ConexionBBDD($consultaCamisetas);
            while($fila = mysqli_fetch_object($resultado)) {
        ?>
            <tr>
                <td><?php echo $fila->id; ?></td>
                <td><?php echo $fila->talla; ?></td>
                <td><?php echo $fila->precio; ?></td>
                <td><?php echo $fila->marca; ?></td>
                <td><?php echo $fila->color; ?></td>
            </tr>
	    <?php } ?>
    </table>
    <div class="container d-flex justify-content-center">
        <a href="ejercicio-3.php" class="btn btn-danger mt-3">Volver</a>
    </div>
</body>
</html>