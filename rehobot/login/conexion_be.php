<?php

    $conexion=mysqli_connect("127.0.0.1","root", "","fundacion");

    if($conexion){
        echo 'conectado exitosamente a la base de datos';
    }else{
        echo 'no se ha podido conectar a la base de Datos';
    }
?>