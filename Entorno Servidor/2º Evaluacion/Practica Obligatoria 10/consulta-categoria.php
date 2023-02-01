<?php

	$db = new mysqli('localhost', 'root', '', 'tienda');

	$categorias = $db->query('SELECT * FROM categorias');

?>