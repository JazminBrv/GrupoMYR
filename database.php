<?php
    $usuarioBD = "root";
    $clave = "";
    $BD = "myr";
    $direccion = "localhost";

    $conexion = mysqli_connect($direccion,$usuarioBD,$clave,$BD);
    
    echo mysqli_error($conexion);
?>


        
