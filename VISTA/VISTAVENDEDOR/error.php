<!DOCTYPE html>
<html lang="en">
 <head>
    <title>ERROR &mdash; INGRESO  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        body{
            background-image: url(images/fondo.png);
        }
        h1{
                background-color: white;
            }
</style>
<body>

    <header>
        <div class="w3-container w3-black w3-center">
            <h1>BIENVENIDO</h1>
        </div>
    </header>


    <div class="w3-container w3-red">
        <h1><?php
         echo $_GET['mensaje'];
        ?></h1>
        <a href="../../VISTAS/VISTACLIENTE/IngresoCliente.php">Volver a ingresar</a>
    </div>
</body>
</html>