<?php

// Apartado a)
echo "<h2>a)</h2>";

$var1 = 5;
echo "Valor: " . $var1;
echo "<br>";

echo "Tipo: " . gettype($var1);
echo "<br>";

// Apartado b)
echo "<h2>b)</h2>";

settype($var1, "string");
echo "Valor: " . $var1;
echo "<br>";

echo "Tipo: " . gettype($var1);
echo "<br>";

// Apartado c)
echo "<h2>c)</h2>";
if (isset($var1)) {
    echo "La variable \$var1 existe";
}
echo "<br>";

// Apartado d)
unset($var1);

// Apartado e)
echo "<h2>e)</h2>";
if (!isset($var1)) {
    echo "La variable \$var1 no existe";
}
echo "<br>";


// Apartado f)
echo "<h2>f)</h2>";
$variable = "Hola, este es el texto del apartado f.";

if (empty($variable)) {

    if (!isset($variable)) {
        echo "La variable no está inicializada.";
    } elseif ($variable == 0) {
        echo "La variable tiene valor 0.";
    } elseif ($variable == "") {
        echo "La variable tiene una cadena vacía.";
    }

} else {
    echo "La variable tiene el valor: " . $variable;    
}

?>