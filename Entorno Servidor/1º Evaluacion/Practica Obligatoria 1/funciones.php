<?php

// FUNCIÓN GENERADORA DEL TÍTULO
function mostrarCurso($year) {
    echo 'Calendario escolar ' . $year . '-' . $year + 1;
}

// FUNCIÓN GENERADORA DEL CALENDARIO
function generarCalendario($year, $unoSept) {
    // ARRAY DE MESES CON SUS RESPECTIVAS CANTIDADES DE DÍAS
    $arrayMeses = [
        'septiembre' => 30,
        'octubre' => 31,
        'noviembre' => 30,
        'diciembre' => 31,
        'enero' => 31,
        'febrero' => 0,
        'marzo' => 31,
        'abril' => 30,
        'mayo' => 31,
        'junio' => 30,
    ];
    
    // BUCLE FOREACH PARA CREAR CADA MES
    foreach ($arrayMeses as $mes => $dias) {

        // SUMAMOS UN AÑO CUANDO ENTRAMOS EN DICIEMBRE
        if ($mes == 'enero') {
            $year++;
        }

        echo '<div class="elementoTabla">
                <table>
                    <th colspan="7" class="tituloMes">' . $mes . ' ' .  $year . '</th>
                        <tr>
                            <th>L</th>
                            <th>M</th>
                            <th>X</th>
                            <th>J</th>
                            <th>V</th>
                            <th>S</th>
                            <th>D</th>
                        </tr>
                    <tbody>
                    <colgroup>
                        <col span="5" class="noFestivo">
                        <col span="2" class="festivo">
                    </colgroup>
                        <tr>';

            // VOLVEMOS A COMPROBAR SI EL NUEVO AÑO ES BISIESTO Y ASIGNAMOS UN NÚMERO DE DÍAS A FEBRERO
            if ($mes == 'febrero') {
                $dias = comprobarBisiesto($year);
            }

            // IF PARA CREAR X HUECOS EN BLANCO EN FUNCIÓN DEL 1 DE SEPTIEMBRE
            if ($mes == 'septiembre') {
                $huecoBlanco = comprobarUnoSept($unoSept);

                for ($i = 1; $i <= $huecoBlanco; $i++) {
                    echo '<td class="diaBlanco"></td>';
                }
            } else {
                
                for ($i = 1; $i <= $huecoBlanco; $i++) {
                    echo '<td class="diaBlanco"></td>';
                }
            }
            
            // FOR PARA CREAR CADA MES EN FUNCIÓN DEL NÚMERO DE DÍAS Y DE LOS HUECOS EN BLANCO
            for ($i = 1; $i <= $dias; $i++) {
                
                // LLAMADA A LAS FUNCIONES QUE NOS ENCUENTRAN LOS FESTIVOS Y EL DÍA DE INICIO Y FIN
                $festivo = comprobarFestivo($i, $mes);
                $inicioFin = comprobarInicioFin($i, $mes);

                // AGREGAMOS LA CLASE DESEADA EN FUNCIÓN DEL DÍA EN EL QUE ESTEMOS
                if ($festivo == true) {
                    $clase = 'class="festivo"';
                } else if ($inicioFin == true) {
                    $clase = 'class="inicioFin"';
                } else {
                    $clase = null;
                }

                //ESCRIBIMOS LA CELDA CON SU CORRESPONDIENTE CLASE
                echo '<td ' . $clase . '>' . $i . '</td>';

                // AL LLEGAR A 7 CELDAS PINTADAS HACEMOS UN 'SALTO DE FILA'
                if (($i + $huecoBlanco) % 7 == 0) {
                    echo '</tr><tr>';
                }
            }

            // SI LA SUMA DE LOS DIAS + LOS HUECOS EN BLANCO ES MENOR QUE 35 HABRÁN 35 CELDAS, SI NO 42
            if (($dias + $huecoBlanco) < 35) {
                $cantidadCeldas = 35;
            } else {
                $cantidadCeldas = 42;
            }
            
            // CALCULAMOS LA CANTIDAD DE HUECOS EN BALNCO DEL FINAL PARA PASÁRSELO 
            // AL SIGUIENTE MES EN FORMA DE HUECOS EN BLANCO INICIALES
            $ultimosHuecos = $cantidadCeldas - ($dias + $huecoBlanco);
            $huecoBlanco = 7 - $ultimosHuecos;
        
        echo '</tr></tbody></table></div>';
    }
}

// FUNCIÓN QUE COMPRUEBA SI EL AÑO BISIESTO Y DEVUELVE LA CANTIDAD DE DÍAS DE FEBRERO
function comprobarBisiesto($year) {
    if ($year % 4 == 0) {
        if ($year % 100 == 0) {
            if ($year % 400 == 0) {
                return 29;
            } else {
                return 28;
            }
        } else {
            return 29;
        }
    } else {
        return 28;
    }
}

// FUNCIÓN QUE DEVUELVE EN QUÉ POSICIÓN ESTÁ EL 1 DE SEPTIEMBRE
function comprobarUnoSept($unoSept) {
    if ($unoSept == 'Monday') {
        return 0;
    } elseif ($unoSept == 'Tuesday') {
        return 1;
    } elseif ($unoSept == 'Wednesday') {
        return 2;
    } elseif ($unoSept == 'Thursday') {
        return 3;
    } elseif ($unoSept == 'Friday') {
        return 4;
    } elseif ($unoSept == 'Saturday') {
        return 5;
    } elseif ($unoSept == 'Sunday') {
        return 6;
    } else {
        return 0;
    }
}

// FUNCIÓN QUE ENCUENTRA LOS DÍAS FESTIVOS
function comprobarFestivo($dia, $mes) {
    // ARRAY DE FESTIVOS
    $arrayFestivos = [
        'septiembre' => [],
        'octubre' => [12, 31],
        'noviembre' => [1, 2, 9],
        'diciembre' => [5, 6, 7, 8, 23, 24, 25, 26, 27, 28, 29, 30, 31],
        'enero' => [1, 2, 3, 4, 5, 6, 7, 8],
        'febrero' => [24, 27],
        'marzo' => [31],
        'abril' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
        'mayo' => [1, 2],
        'junio' => []
    ];

    foreach($arrayFestivos as $meses => $diasFestivos) {
        foreach($diasFestivos as $diaFestivo) {
            if ($diaFestivo === $dia && $meses === $mes) {
                return true;
            }
        }
    }
}

// FUNCIÓN QUE ENCUENTRA EL DÍA DE INICIO Y DE FIN DE CURSO
function comprobarInicioFin($dia, $mes) {
    // ARRAY DE DÍAS DE INICIO Y FIN
    $arrayInicioFin = [
        'septiembre' => [8],
        'junio' => [22]
    ];

    foreach($arrayInicioFin as $meses => $diaInicioFin) {
        foreach($diaInicioFin as $diaInFin) {
            if ($diaInFin === $dia && $meses === $mes) {
                return true;
            }
        }
    }
}

?>