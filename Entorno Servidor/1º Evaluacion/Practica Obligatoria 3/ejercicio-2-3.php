<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2-3 | Alexandru Kovacs</title>
    <link rel="icon" type="image/x-icon" href="img/php.png">
    <link rel="stylesheet" href="css/ejercicio-2.css">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend>Modificar alumno</legend>
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
                <input type="submit" name="modificar" value="Modificar alumno">
                <input type="reset" name="limpiar" value="Limpiar">
            </div>
            <div class="respuesta">
            <?php
                    if (isset($_POST['modificar'])) {

                        if ($_POST['matricula'] !== "") {                        
                            $docXML = new DOMDocument();
                            $docXML->preserveWhiteSpace = false;
                            $docXML->load('notas.xml');

                            $notas = $docXML->documentElement;

                            $matriculas = $notas->getElementsByTagName('matricula');
                            $existe = false;
                            $posAlumno = 0;

                            foreach ($matriculas as $matricula) {
                                if ($matricula->nodeValue == $_POST['matricula']) {
                                    $existe = true;
                                    break;
                                }
                                $posAlumno++;
                            }

                            if ($existe) {
                                // CREAMOS UN DOCUMENTO QUE ALMACENE LOS DATOS DEL NUEVO ALUMNO
                                $docAlumno = new DOMDocument();

                                // CREAMOS EL NUEVO ELEMENTO ALUMNO CON SUS NUEVOS DATOS
                                $alumno = $docAlumno->createElement('alumno');

                                $alumno->appendChild($docAlumno->createElement('matricula', $_POST['matricula']));
                                $alumno->appendChild($docAlumno->createElement('nombre', $_POST['nombre']));
                                $alumno->appendChild($docAlumno->createElement('apellidos', $_POST['apellidos']));
                                $alumno->appendChild($docAlumno->createElement('teoria', $_POST['teoria']));
                                $alumno->appendChild($docAlumno->createElement('practicas', $_POST['practicas']));

                                $docAlumno->appendChild($alumno);

                                $xPath = new DOMXpath($docXML);
                                $listaAlumnos = $xPath->query('/notas/alumno');
                                $antiguoAlumno = $listaAlumnos->item($posAlumno);

                                $nuevoAlumno = $docXML->importNode($docAlumno->documentElement, true);
                                
                                $antiguoAlumno->parentNode->replaceChild($nuevoAlumno, $antiguoAlumno);

                                echo '<h4>El alumno se ha modificado correctamenete.</h4>';
                                $docXML->save('notas.xml');
                                
                            } else {
                                echo '<h4>La matrícula no existe.</h4>';    
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