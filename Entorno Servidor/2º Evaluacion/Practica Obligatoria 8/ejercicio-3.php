<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 | Alexandru Kovacs</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="img/php.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body>
<h2 class="mt-3">TABLA CAMISETA</h2>
	<table class="table table-hover table-striped w-50 mt-5">
		<tr>
			<th>ID</th>
			<th>TALLA</th>
			<th>PRECIO</th>
			<th>MARCA</th>
			<th>COLOR</th>
		</tr>
        <?php
            require 'vendor/autoload.php';

            $cliente = new MongoDB\Client("mongodb://localhost:27017");
            $bd = $cliente->ropa;
            
            $getDocuments = $bd->camiseta->find();

            foreach ($getDocuments as $document) :?>
                <tr>
                    <td><?php echo $document['id']; ?></td>
                    <td><?php echo $document['talla']; ?></td>
                    <td><?php echo $document['precio']; ?></td>
                    <td><?php echo $document['marca']; ?></td>
                    <td><?php echo $document['color']; ?></td>
                </tr>
        <?php endforeach;?>
	</table>
    <div class="container d-flex justify-content-center text-center">
        <form action="ejercicio-3-consultar.php" method="post">
            <label for="talla" class="mb-3">Selecciona una talla</label>
            <select class="form-select text-center mb-3" name="talla">
                <?php
                    $getDocuments = $bd->camiseta->find();
                    $tallas = [];
                    foreach ($getDocuments as $document) { 
                        array_push($tallas, $document['talla']);
                    }

                    $tallasUnicas = array_unique($tallas);
                    sort($tallasUnicas);

                    foreach($tallasUnicas as $talla) :
                ?>
                    <option value="<?php echo $talla; ?>"><?php echo $talla; ?></option>
                <?php 
                    endforeach;
                ?>
            </select>
            <div class="container d-flex gap-2 mb-3 justify-content-center">
                <button type="submit" class="btn btn-success mt-2">Consultar</button>
                <a href="index.php" class="btn btn-danger mt-2">Volver</a>
            </div>
        </form>
    </div>
</body>
</html>