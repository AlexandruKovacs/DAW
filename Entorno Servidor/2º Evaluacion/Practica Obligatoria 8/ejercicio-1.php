<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 | Alexandru Kovacs</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="img/php.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body>
	<h2 class="mt-3">TABLA CALZADO</h2>
	<table class="table table-hover table-striped w-50 mt-5">
		<tr>
            <th>ID</th>
            <th>TALLA</th>
            <th>PRECIO</th>
            <th>MARCA</th>
            <th>COLOR</th>
            <th></th>
		</tr>
        <?php
            require 'vendor/autoload.php';

            $cliente = new MongoDB\Client("mongodb://localhost:27017");
            $bd = $cliente->ropa;

            $getDocuments = $bd->calzado->find();

            foreach ($getDocuments as $document) :
        ?>
            <tr>
                <td><?php echo $document['id']; ?></td>
                <td><?php echo $document['talla']; ?></td>
                <td><?php echo $document['precio']; ?></td>
                <td><?php echo $document['marca']; ?></td>
                <td><?php echo $document['color']; ?></td>
                <td>
                    <a class="btn btn-warning" href="ejercicio-1-editar.php?id=<?php echo $document['id']; ?>">
                    <i class="fa-solid fa-pen"></i></a>
                </td>
            </tr>
        <?php endforeach;?>
	</table>
    <div class="container d-flex justify-content-center">
        <a href="index.php" class="btn btn-danger">Volver</a>
    </div>
</body>
</html>