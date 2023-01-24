<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar | Alexandru Kovacs</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="img/php.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        require 'functions.php';
        require 'vendor/autoload.php';
        $cliente = new MongoDB\Client("mongodb://localhost:27017");
        $bd = $cliente->ropa;
    ?>
    <h2  class="mt-3">AÑADIR REGISTRO</h2>
    <div class="container mt-4">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="w-25 m-auto" method="POST">
            <label for="persona" class="mb-1">Persona</label>
            <select class="form-select text-center mb-3" name="persona">
                <?php
                    $getDocuments = $bd->persona->find();
                    foreach ($getDocuments as $document) :
                ?>
                    <option value="<?php echo $document['id']?>"><?php echo $document['nombre']?></option>
                <?php endforeach;?>
            </select>

            <label for="pantalon" class="mb-1">Pantalón</label>
            <select class="form-select text-center mb-3" name="pantalon" required>
                <?php
                    $getDocuments = $bd->pantalon->find();
                    foreach ($getDocuments as $document) :
                ?>
                    <option value="<?php echo $document['id']?>"><?php echo $document['talla'] . '-' . $document['color']; ?></option>
                <?php endforeach;?>
            </select>

            <label for="camiseta" class="mb-1">Camiseta</label>
            <select class="form-select text-center mb-3" name="camiseta" required>
                <?php
                    $getDocuments = $bd->camiseta->find();
                    foreach ($getDocuments as $document) :
                ?>
                    <option value="<?php echo $document['id']?>"><?php echo $document['talla'] . '-' . $document['color']; ?></option>
                <?php endforeach;?>
            </select>

            <label for="calzado" class="mb-1">Calzado</label>
            <select class="form-select text-center mb-3" name="calzado" required>
                <?php
                    $getDocuments = $bd->calzado->find();
                    foreach ($getDocuments as $document) :
                ?>
                    <option value="<?php echo $document['id']?>"><?php echo $document['talla'] . '-' . $document['color']; ?></option>
                <?php endforeach;?>
            </select>

            <div class="container d-flex gap-2 justify-content-center">
                <input type="submit" class="btn btn-success mt-2" value="Registrar" name="submit">
                <a href="ejercicio-4.php" class="btn btn-danger mt-2">Volver</a>
            </div>  
        </form>
    </div>
    <?php insertarLlevar(); ?>
</body>
</html>