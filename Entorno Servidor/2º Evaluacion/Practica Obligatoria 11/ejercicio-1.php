<!DOCTYPE html>
<html lang="en">
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
    <h2 class="mt-3">Articulos</h2>
    <table class="table table-hover table-striped w-75 mt-5">
		<tr>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>DESCRIPCION</th>
			<th>PRECIO</th>
			<th>CANTIDAD</th>
            <th>PROVEEDOR</th>
            <th></th>
		</tr>
		<?php
            require_once 'bootstrap.php';
            require_once './entities/Articulos.php';
            require_once './entities/Proveedor.php';
            
            // Todos los articulos, todos los datos
            $query = $entityManager->createQuery('SELECT art FROM Articulos art');
            $articulos = $query->getResult();

            foreach ($articulos as $articulo) :
            $proveedor = $articulo->getIdProveedor();
            ?>
            <tr>
                <td><?php echo $articulo->getId() ?></td>
                <td><?php echo $articulo->getNombre() ?></td>
                <td><?php echo $articulo->getDescripcion() ?></td>
                <td><?php echo $articulo->getPrecio() ?>€</td>
                <td><?php echo $articulo->getCantidad() ?></td>
                <td><?php echo $proveedor->getNombre() ?></td>
                <td>
                    <a class="btn btn-warning" href="ejercicio-1-editar.php?id=<?php $articulo->getId() ?>">
                    <i class="fa-solid fa-pen"></i></a>
                </td>
            </tr>
	    <?php endforeach; ?>
	</table>
    <div class="container d-flex justify-content-center">
        <a href="index.php" class="btn btn-danger">Volver</a>
    </div>
</body>
</html>