<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar | Alexandru Kovacs</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="img/php.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>
<body>
<h2 class="mt-3">EDITAR CALZADO</h2>
    <?php
        include("funciones.php");
        $ID = $_GET['id'];
        
        getID('calzado', 'id', $ID);
    ?>
        <form method="post">
            <table class="table table-striped w-50 mt-5">
                <tr>
                    <th>ID</th>
                    <th>TALLA</th>
                    <th>PRECIO</th>
                    <th>MARCA</th>
                    <th>COLOR</th>
                    <th></th>
                </tr>
                <tr class="text-center">
                    <td><?php echo $row->id; ?></td>
                    <td><input type="text" class="form-control" value="<?php echo $row->talla; ?>" name="talla"></td>
                    <td><input type="text" class="form-control" value="<?php echo $row->precio; ?>" name="precio"></td>
                    <td><input type="text" class="form-control" value="<?php echo $row->marca; ?>" name="marca"></td>
                    <td><input type="text" class="form-control" value="<?php echo $row->color; ?>" name="color"></td>
                    <td><button type="submit" name="submit" class="btn btn-success">
                            <i class="fa fa-check" aria-hidden="true"></i>
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    <div class="container d-flex justify-content-center">
        <a href="ejercicio-1.php" class="btn btn-danger mt-3">Volver</a>
    </div>
    <?php
        if(isset($_POST['submit'])) {
            $nuevosCampos = [
                "talla"=>$_POST['talla'],
                "precio"=>$_POST['precio'],
                "marca"=>$_POST["marca"],
                "color"=>$_POST["color"]
            ];

            editarDatos('calzado', $nuevosCampos, 'id', $ID);
            header("Location: ejercicio-1.php");
        }
	?>
</body>
</html>