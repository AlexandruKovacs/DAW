<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 | Alexandru Kovacs</title>
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
		</tr>
        <?php
            require 'vendor/autoload.php';
            require 'functions.php';

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
            </tr>
        <?php endforeach;?>
	</table>
    <div class="container d-flex justify-content-center text-center">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="talla" class="mb-3">Selecciona una talla</label>
            <select class="form-select text-center w-50 mx-auto" name="talla" required>
                <option value=""></option>
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="38">38</option>
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
                <option value="45">45</option>
                <option value="46">46</option>
            </select>
            <div class="container d-flex gap-2 mt-3 justify-content-center">
                <button type="submit" class="btn btn-warning" name="submit">
                    Eliminar <i class="fa-solid fa-trash"></i>
                </button>
                <a href="index.php" class="btn btn-danger">Volver</a>
            </div>
        </form>
        <?php eliminarCalzado(); ?>
    </div>
</body>
</html>