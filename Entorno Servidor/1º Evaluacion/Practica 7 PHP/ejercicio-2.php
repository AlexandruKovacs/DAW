<?php

$empleados = array(
    array(
        'nombre' => 'Alexandru',
        'apellidos' => 'Kovacs',
        'fechaDeNacimiento' => '27/06/2000',
        'direccionPostal' => 'Calle Pepe Nº6',
        'email' => 'alex@gmail.com',
        'salarioBruto' => '1000',
        'comisiones' => '20%'
    ),
    array(
        'nombre' => 'Adrian', 
        'apellidos' => 'Mata',
        'fechaDeNacimiento' => '12/03/2001',
        'direecionPostal' => 'Calle Pepa Nº4',
        'email' => 'adrian@gmail.com',
        'salarioBruto' => '2000',
        'comisiones' => '30%'
    )
    );

$nombreEmpleado = "Adrian";
$datosEmpleado = [];

foreach ($empleados as $array => $arr) {
    foreach ($arr as $empleado => $nombre) {
        if ($nombre == $nombreEmpleado) {
            foreach($arr as $elemento => $data) {
                $datosEmpleado[] = $data;
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 | Alexandru Kovacs</title>
</head>
<body>
    <h2>Datos empleado</h2>
    <p>Los datos del empleado <?php echo $nombreEmpleado; ?> son: <pre><?php print_r($datosEmpleado); ?></pre></p>
</body>
</html>