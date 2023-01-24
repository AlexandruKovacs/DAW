<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script 1 | Alexandru Kovacs</title>
</head>
<body>
    <h2>Trabajando con SimpleXML</h2>
    <?php
        if (!file_exists('notas.xml')) {
            exit('No se encuentra el fichero "notas.xml".');
        }
    ?>
    <table border="1">
        <?php
            $notas = simplexml_load_file('notas.xml');
            $nombre = "Dario";
            foreach ($notas->alumno->$nombre as $prop => $valor) {
                echo '<tr>';
                echo '<td bgcolor="yellow">' . $prop . '</td>';
                echo '<td>' . $valor . '</td>';
                echo '</tr>';
            }

            $notas = simplexml_load_file('notas.xml');
            foreach ($notas->alumno as $prop) {
                if ($prop->nombre == 'Dario') {
                    echo "Matricula: " . $prop->matricula . "\n";
                    echo "Nombre: " . $prop->nombre . "\n";
                    echo "Apellidos: " . $prop->apellidos . "\n";
                    echo "Teoria: " . $prop->teoria . "\n";
                    echo "Practicas: " . $prop->practicas . "\n";
                }
            }
        ?>
    </table>
    <br>
    <table border="1">
        <tr>
            <?php
                $notas = simplexml_load_file('notas.xml');
                echo '<td>' . $notas->alumno[0]->matricula . '</td>';
                echo '<td>' . $notas->alumno[0]->nombre . '</td>';
                echo '<td>' . $notas->alumno[0]->apellidos . '</td>';
                echo '<td>' . $notas->alumno[0]->teoria . '</td>';
                echo '<td>' . $notas->alumno[0]->practicas . '</td>';
            ?>
        </tr>
    </table>
</body>
</html>