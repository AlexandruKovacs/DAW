<?php

echo "pagina 2";
echo '<br>';

print_r($_GET);

header("Location: pagina3.php?name=" . $_GET['name']);