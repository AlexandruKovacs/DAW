<?php
/************************************
 * Diseñado por: Daniel Samuel Dediu
 * Email: daniels.dediu@gmail.com

 * Copyright: DCoder 2019
 * Todos los derechos reservados
************************************/

if($_FILES && count($_FILES)>0){
    foreach($_FILES as $v){
        if($v["error"] !== 0){
            die("0 => Error interno grave");
        }

        if(!is_dir("subidas")){
            mkdir("subidas");
        }

        move_uploaded_file($v["tmp_name"],"subidas/".$v["name"]);
        echo "1 => All OK";
    }
}else{
    echo "0 => Sin datos";
}