<?php

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// 	echo "Se enviaron por POST";
// } else {
// 	echo "Se enviaron por GET";
// }

if (isset($_POST['submit-formulario2'])) {
	echo "Se han enviado los datos correctamente";
	print_r ($_POST['submit']);
}



?>
