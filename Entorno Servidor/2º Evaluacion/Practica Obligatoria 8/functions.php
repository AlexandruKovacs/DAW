<?php

function actualizarCalzado() {
    if(isset($_POST['submit'])) {
        try {

            require 'vendor/autoload.php';
            $cliente = new MongoDB\Client("mongodb://localhost:27017");
            $bd = $cliente->ropa;
    
            $actualizarCalzado = $bd->calzado->updateOne(
                [ 'id' => $_POST['id'] ],
                [ '$set' => [ 
                    'talla' => $_POST['talla'],
                    'precio' => $_POST['precio'],
                    'marca' => $_POST['marca'],
                    'color' => $_POST['color'] 
                ]]
            );
    
            header("Location: ejercicio-1.php");
    
        } catch (Exception $e) {
            print($e);
        }
    }
}

function insertarPantalon() {
    if(isset($_POST['submit'])) {
        try {

            require 'vendor/autoload.php';
            $cliente = new MongoDB\Client("mongodb://localhost:27017");
            $bd = $cliente->ropa;
    
            $insertarPantalon = $bd->pantalon->insertOne([
                'id' => $_POST['id'] ,
                'talla' => $_POST['talla'],
                'precio' => $_POST['precio'],
                'marca' => $_POST['marca'],
                'color' => $_POST['color']
            ]);

            header("Location: ejercicio-2.php");

        } catch (Exception $e) {
            print($e);
        }
    }
}

function insertarLlevar() {
    if(isset($_POST['submit'])) {

        require 'vendor/autoload.php';
        $cliente = new MongoDB\Client("mongodb://localhost:27017");
        $bd = $cliente->ropa;

        $hoy = date('Y-m-d');
        
        $fechaYPersona = $hoy . '-' . $_POST['persona'];
        $existe = false;

        $getDocuments = $bd->llevar->find();

        foreach ($getDocuments as $document) {
            $datosFP = $document['fecha'] . '-' . $document['pers'];
            if ($datosFP == $fechaYPersona) {
                $existe = true;
            }
        }

        if($existe == true) {
            echo '<p class="text-center text-danger mt-3">La fecha y la persona ya existen.</p>';
        } else {
            try {

                $insertarFila = $bd->llevar->insertOne([
                    'fecha' => "$hoy",
                    'pers' => $_POST['persona'],
                    'pantalon' => $_POST['pantalon'],
                    'camiseta' => $_POST['camiseta'],
                    'calzado' => $_POST['calzado']
                ]); 
            
            } catch (Exception $e) {
                print($e);
            }
            echo '<p class="text-success text-center mt-3">Se ha registrado correctamente.</p>';
        }
    }
}

function eliminarCalzado() {
    if (isset($_POST['submit'])) {  
        try {
            require 'vendor/autoload.php';
            $cliente = new MongoDB\Client("mongodb://localhost:27017");
            $bd = $cliente->ropa;

            $elmininarCalzado = $bd->calzado->deleteMany(
                ['talla' => $_POST['talla']]
            );

            header('Location: ejercicio-5.php');

        } catch (Exception $e)  {
            print($e);
        }
    }
}