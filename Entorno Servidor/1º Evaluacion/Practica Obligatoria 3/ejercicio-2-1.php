<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2-1 | Alexandru Kovacs</title>
    <link rel="icon" type="image/x-icon" href="img/php.png">
    <link rel="stylesheet" href="css/ejercicio-2.css">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
</head>
<body>
    <fieldset>
    <legend>Añadir alumno</legend>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <label for="matricula">Matrícula</label>
            <input type="text" name="matricula">

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">

            <label for="teoria">Teoría</label>
            <input type="number" name="teoria" step="any">

            <label for="practicas">Prácticas</label>
            <input type="number" name="practicas" step="any">
                    
            <div class="botones">
                <input type="submit" name="crear" value="Añadir alumno">
                <input type="reset" name="limpiar" value="Limpiar">
            </div>
            <div class="respuesta">
                <?php
                    if (isset($_POST['crear'])) {

                        if ($_POST['matricula'] !== "") {                        
                            $docXML = new DOMDocument();
                            $docXML->preserveWhiteSpace = false;
                            $docXML->load('notas.xml');

                            $notas = $docXML->documentElement;

                            $matriculas = $notas->getElementsByTagName('matricula');
                            $existe = false;

                            foreach ($matriculas as $matricula) {
                                if ($matricula->nodeValue == $_POST['matricula']) {
                                    $existe = true;
                                }
                            }

                            if ($existe) {
                                echo '<h4>La matrícula ya existe.</h4>';
                            } else {

                                $alumno = new DOMDocument();

                                $alumno = $docXML->createElement('alumno');
                                $notas->appendChild($alumno);

                                $matricula = $docXML->createElement('matricula', $_POST['matricula']);
                                $alumno->appendChild($matricula);

                                $nombre = $docXML->createElement('nombre', $_POST['nombre']);
                                $alumno->appendChild($nombre);

                                $apellidos = $docXML->createElement('apellidos', $_POST['apellidos']);
                                $alumno->appendChild($apellidos);
                
                                $teoria = $docXML->createElement('teoria', $_POST['teoria']);
                                $alumno->appendChild($teoria);

                                $practicas = $docXML->createElement('practicas', $_POST['practicas']);
                                $alumno->appendChild($practicas);

                                echo '<h4>El alumno se ha creado correctamente.</h4>';
                                $docXML->save('notas.xml');
                            }
                    } else {
                        echo '<h4>Por favor, introduce una matrícula.</h4>';
                    }
                } else {
                    echo '';
                }
                ?>
            </div>
        </form>
    </fieldset>
</body>
</html>