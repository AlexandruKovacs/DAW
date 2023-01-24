<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 | Alexandru Kovacs</title>
    <link rel="icon" type="image/x-icon" href="img/php.png">
    <link rel="stylesheet" href="css/ejercicio-1.css">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
</head>
<body>
    <fieldset>
    <legend>Buscar datos de un alumno</legend>
        <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
            
            <label for="nombre">Introduzca el nombre del alumno:</label>
            <input type="text" name="nombre">

            <input type="submit" value="Buscar" name="enviar">
        </form>
        <div class="respuesta">
            <?php
                if (isset($_POST['enviar'])) {

                    if ($_POST['nombre'] != "") {
                        
                        $notas = simplexml_load_file('notas.xml');
                        $existe = false;
                        $numAlumnos = 0;
                        $notasTeoria = 0;
                        $notasPracticas = 0;

                        foreach ($notas->alumno as $alumno) {

                            $numAlumnos++;

                            if (strtolower($alumno->nombre) == strtolower($_POST['nombre'])) {
                                $existe = true;
                                echo '<h4>Datos de ' .  $alumno->nombre . ' ' . $alumno->apellidos . ':</h4>';
                                echo '<li>Matrícula: ' . $alumno->matricula . '</li>';
                                echo '<li>Nombre: ' . $alumno->nombre . '</li>';
                                echo '<li>Apellidos: ' . $alumno->apellidos . '</li>';
                                echo '<li>Teoría: ' . $alumno->teoria . '</li>';
                                echo '<li>Prácticas: ' . $alumno->practicas . '</li>';
                            }
                            
                            $notasTeoria += $alumno->teoria;
                            $notasPracticas += $alumno->practicas;
                        }

                        $mediaTeoria = $notasTeoria / $numAlumnos;
                        $mediaPracticas = $notasPracticas / $numAlumnos;

                        if ($existe) {
                            echo '<p>Su nota de teoría es: ' . $alumno->teoria . ' y la media de la clase es: ' . number_format($mediaTeoria, 2) . '</p>';
                            echo '<p>Su nota de prácticas es: ' . $alumno->practicas . ' y la media de la clase es: ' . number_format($mediaPracticas, 2) . '</p>';
                            echo '<h4>El alumno ' . $_POST['nombre'] . ' está en el fichero.</h4>';
                        } else {
                            echo '<h4 class="noExiste">El alumno ' . $_POST['nombre'] . ' no está en el fichero.</h4>';
                        }

                    } else {
                        echo '<h4 class="noExiste">Por favor, introduce un nombre.</h4>';
                    }
                }
            ?>
        </div>
    </fieldset>
</body>
</html>