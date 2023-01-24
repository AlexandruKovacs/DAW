<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 1 | Alexandru Kovacs</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="img/php.png">
</head>
<body>
	<?php
		/* Conectar a la BD y luego ya actuo siempre sobre la variable conexion*/
		$conexion = mysqli_connect("localhost","root","","ropa");
		
		/* Para seleccionar la bd*/	
		mysqli_select_db($conexion,"ropa") or die ("No se puede seleccionar la BD");
		
		/* Lazo la consulta sobre la BD*/	
		$resultado = mysqli_query($conexion, "SELECT * FROM camiseta");
		
		/* Para detectar errores*/
		if (mysqli_connect_errno()) {
			printf("<p>Conexión fallida: %s</p>", mysqli_connect_error());
			exit();
		}

		/* Devuelve el número de filas del resultado */
		$numeroFilas = mysqli_num_rows($resultado);
	?>
	<h2>TABLA CAMISETA</h2>
	<table>
		<tr>
			<th>ID</th>
			<th>TALLA</th>
			<th>PRECIO</th>
			<th>MARCA</th>
			<th>COLOR</th>
		</tr>
		<?php
			if($numeroFilas > 0) {
				for ($i = 0; $i < $numeroFilas; $i++) {
					echo "<tr>";
					/* El resultado es realmente una matriz y voy cogiendo por filas con esa función  */					
					$fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

					/* Para concatenar string utilzo el .*/					
					echo "<td>".$fila["id"]."</td>";
					echo "<td>".$fila["talla"]."</td>";
					echo "<td>".$fila["precio"]."</td>";
					echo "<td>".$fila["marca"]."</td>";
					echo "<td>".$fila["color"]."</td>";
					echo "</tr>";
				}
			}
		?>
	</table>
</body>
</html>
