<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script 3 | Alexandru Kovacs</title>
</head>
<body>
    <h2>Trabajando con DOM</h2>
    <?php
        if (!file_exists('notas.xml')) {
            exit('No se encuentra el fichero "notas.xml".');
        }

        $docXML = new domDocument();
        $docXML->preserveWhiteSpace = false;
        $docXML->load('notas.xml');
    ?>
    <table border="1">
        <?php
            $notas = $docXML->documentElement;
            $primerAlumno = $notas->firstChild;

            foreach ($primerAlumno->childNodes as $datosAlumno) {
                echo '<tr>';
                echo '<td>' . $datosAlumno->nodeName . '</td>';
                echo '<td>' . $datosAlumno->nodeValue . '</td>';
                echo '<tr>';
            }
        ?>
    </table>
</body>
</html>