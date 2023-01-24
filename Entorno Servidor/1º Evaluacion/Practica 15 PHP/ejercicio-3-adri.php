<?php

$fichero1 = "numeros-1.txt"; // Almaceno los ficheros en variable
$fichero2 = "numeros-2.txt";

$contenidoFichero1 = file_get_contents($fichero1);  // Almaceno su contenido en una string
$contenidoFichero2 = file_get_contents($fichero2);

$cachos1 = explode(",", $contenidoFichero1);    // Los separo en elementos de array
$cachos2 = explode(",", $contenidoFichero2);

$numerosComunes = [];
$numerosNoComunes = [];


foreach ( $cachos1 as $clave1 => $valor1 ) {

    foreach ( $cachos2 as $clave2 => $valor2 ) {

        if ( $cachos1[$clave1] == $cachos2[$clave2] ) {

            $p = 0;
            foreach ( $numerosComunes as $claveComun => $valorComun ) {

                if ( $cachos1[$clave1] == $numerosComunes[$claveComun] ) {
                    echo "HOLA";
                    $p = 1;
                } 
            }

            if ( $p == 0 ) {
                $numerosComunes[] = $cachos1[$clave1];
            }
 
        }

    }

}


    foreach ( $cachos1 as $clave1 => $valor1 ) {

        $p = 0;
        foreach ( $numerosComunes as $claveComun => $valorComun ) {

            if ( $numerosComunes[$claveComun] == $cachos1[$clave1] ) {
                $p = 1;
            }

        }

        if ( $p == 0 ) {
            $numerosNoComunes[] = $cachos1[$clave1];
        }
    }

    foreach ( $cachos2 as $clave2 => $valor2 ) {

        $p = 0;
        foreach ( $numerosComunes as $claveComun => $valorComun ) {

            if ( $numerosComunes[$claveComun] == $cachos2[$clave2] ) {
                $p = 1;
            }

        }

        if ( $p == 0 ) {
            $numerosNoComunes[] = $cachos2[$clave2];
        }
    }


$ambosFicheros = "\nNúmeros que están en ambos ficheros: \n" . ( implode(",", $numerosComunes) );

$soloEnUno =    "\n\nNúmeros qué están solo en uno de los ficheros: \n" . ( implode(",", $numerosNoComunes) );    

    # Escribir el resultado en el archivo de salida
    file_put_contents("fichero-3.txt", $ambosFicheros . $soloEnUno);
    



?>