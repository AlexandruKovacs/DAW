<?php

if (isset($_COOKIE['font-size'])) {
    $tamaño = htmlspecialchars($_COOKIE['font-size']);
} else {
    $tamaño = '15px';
}

$tamaño = $_COOKIE['font-size'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            font-size: <?php echo $tamaño; ?>
        }
    </style>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta sapiente possimus, natus fuga earum blanditiis aperiam quae assumenda facilis voluptates temporibus in quis suscipit accusamus ipsum maiores nobis dicta rerum.</p>
</body>
</html>