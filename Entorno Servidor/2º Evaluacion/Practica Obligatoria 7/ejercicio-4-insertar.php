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
    <?php include 'funciones.php'; ?>
    <h2  class="mt-3">AÑADIR REGISTRO</h2>
    <div class="container mt-4">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="w-25 m-auto" method="POST">
            <label for="persona" class="mb-1">Persona</label>
            <select class="form-select text-center mb-3" name="persona">
                <?php
                    $consultaPersona = "SELECT id,nombre FROM persona";
                    $resultadoPersona = ConexionBBDD($consultaPersona);
                    while($fila = mysqli_fetch_object($resultadoPersona)) {
                    ?>
                    <option value="<?php echo $fila->id?>"><?php echo $fila->id .'-'. $fila->nombre?></option>
                <?php } ?>
            </select>

            <label for="pantalon" class="mb-1">Pantalón</label>
            <select class="form-select text-center mb-3" name="pantalon">
                <?php
                    $consultaPantalon = "SELECT id,color FROM pantalon";
                    $resultadoPantalon = ConexionBBDD($consultaPantalon);
                    while($fila = mysqli_fetch_object($resultadoPantalon)) {
                    ?>
                    <option value="<?php echo $fila->id?>"><?php echo $fila->id .'-'. $fila->color?></option>
                <?php } ?>
            </select>

            <label for="camiseta" class="mb-1">Camiseta</label>
            <select class="form-select text-center mb-3" name="camiseta">
                <?php
                    $consultaCamiseta = "SELECT id,color FROM camiseta";
                    $resultadoCamiseta = ConexionBBDD($consultaCamiseta);
                    while($fila = mysqli_fetch_object($resultadoCamiseta)) {
                    ?>
                    <option value="<?php echo $fila->id?>"><?php echo $fila->id .'-'. $fila->color?></option>
                <?php } ?>
            </select>

            <label for="calzado" class="mb-1">Calzado</label>
            <select class="form-select text-center mb-3" name="calzado">
                <?php
                    $consultaCalzado = "SELECT id,color FROM calzado";
                    $resultadoCalzado = ConexionBBDD($consultaCalzado);
                    while($fila = mysqli_fetch_object($resultadoCalzado)) {
                    ?>
                    <option value="<?php echo $fila->id?>"><?php echo $fila->id .'-'. $fila->color?></option>
                <?php } ?>
            </select>

            <div class="container d-flex gap-2 justify-content-center">
                <input type="submit" class="btn btn-success mt-2" value="Registrar" name="submit">
                <a href="ejercicio-4.php" class="btn btn-danger mt-2">Volver</a>
            </div>  
        </form>
    </div>
    <?php

        if(isset($_POST['submit'])) {

            $hoy = date('Y-m-d');
            $nuevosCampos = [
                "fecha"=>"'$hoy'",
                "persona"=>$_POST['persona'],
                "pantalon"=>$_POST['pantalon'],
                "camiseta"=>$_POST["camiseta"],
                "calzado"=>$_POST["calzado"]
            ];

            $fechaYPersona = $hoy . '-' . $_POST['persona'];
            $sonIguales = false;       

            $consultaFechaPersona = "SELECT fecha,pers FROM llevar";
            $resultadoFechaPersona = ConexionBBDD($consultaFechaPersona);

            while(($fila = mysqli_fetch_object($resultadoFechaPersona)) && ($sonIguales === false)) {
                $datosFP = $fila->fecha .'-'. $fila->pers;
                if ($datosFP == $fechaYPersona) {
                    $sonIguales = true;
                }
            }

            if($sonIguales == true) {
                echo '<p class="text-center text-danger mt-3">La fecha y la persona ya existen.</p>';
            } else {
                insertarDatosLLevar('llevar', $nuevosCampos);
                echo '<p class="text-success text-center mt-3">Se ha registrado correctamente.</p>';
            }
        }
	?>
</body>
</html>