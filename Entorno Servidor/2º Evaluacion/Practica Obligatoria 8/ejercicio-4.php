<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 | Alexandru Kovacs</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="img/php.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body>
<h2 class="mt-3">TABLA LLEVAR</h2>
	<table class="table table-hover table-striped w-50 mt-5">
		<tr>
			<th>FECHA</th>
			<th>PERSONA</th>
			<th>PANTALÓN</th>
			<th>CAMISETA</th>
			<th>CALZADO</th>
		</tr>
		<?php
            require 'vendor/autoload.php';
            require 'functions.php';

            $cliente = new MongoDB\Client("mongodb://localhost:27017");
            $bd = $cliente->ropa;
            
            $getDocuments = $bd->llevar->find();

            foreach ($getDocuments as $document) :
        ?>
            <tr>
                <td> <?php echo $document['fecha']; ?></td>
                <td> <?php echo $document['pers']; ?></td>
                <td> <?php echo $document['pantalon']; ?></td>
                <td> <?php echo $document['camiseta']; ?></td>
                <td> <?php echo $document['calzado']; ?></td>
            </tr>
        <?php endforeach;?>
	</table>
    <div class="container d-flex gap-2 mb-4 justify-content-center">
        <a class="btn btn-success" href="ejercicio-4-insertar.php">
            Añadir fila <i class="fa-solid fa-plus" aria-hidden="true"></i>
        </a>
        <a href="index.php" class="btn btn-danger">Volver</a>
    </div>
</body>
</html>