<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2-2 | Alexandru Kovacs</title>
    <link rel="icon" type="image/x-icon" href="img/php.png">
    <link rel="stylesheet" href="css/ejercicio-2.css">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
</head>
<body>
<fieldset>
    <legend>Borrar alumno</legend>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <label for="matricula">Matrícula</label>
            <input type="text" name="matricula">
                    
            <div class="botones">
                <input type="submit" name="borrar" value="Borrar alumno">
                <input type="reset" name="limpiar" value="Limpiar">
            </div>
            <div class="respuesta">
                <?php
                    if (isset($_POST['borrar'])) {

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

                                $alumno = $notas->getElementsByTagName('alumno')->item($posAlumno);
                                $notas->removeChild($alumno);

                                echo '<h4>El alumno se ha borrado correctamenete.</h4>';
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