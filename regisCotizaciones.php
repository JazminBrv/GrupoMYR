<?php

    require 'database.php';

    $nombre = $_POST['nombre'];
    $correo_electronico = $_POST['correo_electronico'];
    $telefono = $_POST['telefono'];
    $accesorio = $_POST['accesorio'];
    $medida_alto = $_POST['medida_alto'];
    $medida_ancho = $_POST['medida_ancho'];
    $cuadricula = $_POST['cuadricula'];
    $color_vidrio = $_POST['color_vidrio'];
    $color_aluminio = $_POST['color_aluminio'];

    if($nombre=="")
    {
        //header("Location: index.html");
    }
    else
    {
        $consultaCotizaciones = "INSERT INTO cotizaciones (nombre,correo_electronico,telefono,accesorio,medida_alto,medida_ancho,cuadricula,color_vidrio,color_aluminio) 
        VALUES ('$nombre','$correo_electronico','$telefono','$accesorio','$medida_alto','$medida_ancho','$cuadricula','$color_vidrio', '$color_aluminio')";

        $resultadoReservacion = mysqli_query($conexion,$consultaCotizaciones);
        

        $html=<<<"EOD"
        <html>
                <head>
                    <link rel="stylesheet" type="text/css" href="/fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700">
                    <link rel="stylesheet" href="css/bootstrap.css">
                    <link rel="stylesheet" href="css/fonts.css">
                    <link rel="stylesheet" href="css/style.css">
                    <link href="./CSS/style.css" rel="stylesheet">
                </head>
                <body>
                    <center class="box-booking">
                    <div class="rd-form booking-form">
                        <center><label class="mensajesOKsql">Cotización  Enviada<label></center>
                        <br>
                        <center><label >Pronto recibirás un correo electrónico con respuesta de tu cotización <label></center>
                        <br>
                        
                    </div>
                    <center>
                </body>
            </html>
EOD;

            header("refresh:3; index.html");

    }

?>

                       <h3> <a href="index.html"> Regresar </a> <h3>