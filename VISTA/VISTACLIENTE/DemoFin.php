<?php 
session_start();
require_once('../../MODELO/CONEXION/conexion.php');
$db=Db::conectar();


ob_start();
if (!isset($_SESSION['UserCli']) or !isset($_SESSION['pasClie'])){
        header('Location: ../../VISTA/VISTACLIENTE/IngresoCliente.php');
}
ob_end_flush();

$idcliente = $_SESSION['userid'];


if (!isset($_SESSION['carrito'])){
  header('Location: ../../VISTA/VISTACLIENTE/MenuPrincipalCliente.php');
}
  $arreglo = $_SESSION['carrito'];
  $total=0;
  for ($i=0; $i <count($arreglo); $i++) { 
    $total=$total+$arreglo[$i]['VUNITARIO'] * $arreglo[$i]['Cantidad'];   
  }
    date_default_timezone_set("America/Bogota");
    $fecha= date('Y-m-d H:i:s');
    $db->query("INSERT INTO factura(idfactura,IDCLIENTE,TOTALFACTURA,FECHAFACTURA,ESTADO) VALUES (null,$idcliente,$total,'$fecha','NOPAGO')");

    $order_id = $db->lastInsertId();

    for ($i=0; $i < count($arreglo) ; $i++) { 
      $db->query("INSERT INTO detallefactura(IDFACTURA,IDPRODUCTO,CANTIDADPRODUCTO,TOTALPRODUCTO) VALUES($order_id,
        ".$arreglo[$i]['IDPRODUCTO'].",
        ".$arreglo[$i]['Cantidad'].",
        ".$arreglo[$i]['Cantidad']*$arreglo[$i]['VUNITARIO']."
      )");
    }

   unset($_SESSION['carrito']);
 ?>


</html>
<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Tienda</title>
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
    
  </head>
  <body>
  
  <div class="site-wrap">
   <?php include("./layouts/header.php"); ?> 

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Gracias!</h2>
            <p class="lead mb-5">Tu compra fue exitosa.</p>
            <p><a href="menuprincipalcliente.php" class="btn btn-sm btn-primary">Volver a comprar</a></p>
            <p><a href="../../factura/Factura1.php" class="btn btn-sm btn-primary" >Descargar Factura</a></p>

          </div>
        </div>
      </div>
    </div>

    <?php include("./layouts/footer.php"); ?> 

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>