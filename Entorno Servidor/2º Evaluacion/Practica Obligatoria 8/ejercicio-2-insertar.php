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
    <h2 class="mt-3">AÑADIR PANTALÓN</h2>
        <form method="post">
            <table class="table table-striped w-75 mt-5">
                <tr>
                    <th>ID</th>
                    <th>TALLA</th>
                    <th>PRECIO</th>
                    <th>MARCA</th>
                    <th>COLOR</th>
                    <th></th>
                </tr>
                <tr>
                    <td>
                        <?php
                            require 'vendor/autoload.php';
                            require 'functions.php';

                            $cliente = new MongoDB\Client("mongodb://localhost:27017");
                            $bd = $cliente->ropa;

                            $getDocuments = $bd->pantalon->find();

                            foreach ($getDocuments as $document) {
                                $ID = $document['id'];
                            }
                            
                            $ID++;
                        ?>
                        <input type="hidden" name="id" value="<?php echo $ID; ?>">
                        <input type="text" class="form-control text-center" value="<?php echo $ID; ?>" name="id" disabled>
                    </td>
                    <td>
                        <select class="form-select w-100" name="talla" required>
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
                    </td>
                    <td><input type="text" class="form-control text-center" name="precio" required></td>
                    <td>
                        <select class="form-select mb-3" name="marca" required>
                            <option value=""></option>
                            <?php
                                $getDocuments = $bd->marca->find();
                                foreach ($getDocuments as $document) :
                            ?>
                                <option value="<?php echo $document['id']?>"><?php echo $document['nombre']; ?></option>
                            <?php endforeach;?>
                        </select>
                    </td>
                    <td><input type="text" class="form-control text-center" name="color" required></td>
                    <td>
                        <button type="submit" name="submit" class="btn btn-success">
                            <i class="fa fa-check"></i>
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    <?php insertarPantalon(); ?>
    <div class="container d-flex justify-content-center">
        <a href="ejercicio-2.php" class="btn btn-danger mt-3">Volver</a>
    </div>
</body>
</html>