<?php 

session_start();
include('../../MODELO/CONEXION/conexion.php');
$db=Db::conectar();
ob_start();
if (!isset($_SESSION['UserCli']) or !isset($_SESSION['pasClie'])){
    header("Location: ../ApprenticeViews/erroradmin.php");
}
ob_end_flush();


$arreglo = $_SESSION['carrito'];
if (!isset($_SESSION['carrito'])) {

  header('Location:../../VISTAS/VISTACLIENTE/menuprincipalcliente.php');

}

  $arreglo = $_SESSION['carrito'];


 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CONFIRMAR &mdash; PEDIDO </title>
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
      
      td{
        text-transform: uppercase;
      }

      p{
        text-transform: uppercase;
      }




    </style>
    
  </head>
  <body>
  
  <div class="site-wrap">
    <?php include("./layouts/header.php"); ?> 

    <div class="site-section">
      <div class="container">
        <div class="row col-md-12">
            
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h2 mb-4 text-black">TU ORDEN</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Cantidad</th>
                      <th>Producto</th>
                      <th>Valor Unitario</th>
                      <th>Valor Total</th>
                    </thead>
                    <tbody>
                      <?php
                         $total=0;
                         $orderTotal=$total;

                        for ($i=0; $i < count($arreglo); $i++) { 
                          $total = ($arreglo[$i]['VUNITARIO']*$arreglo[$i]['Cantidad']);
                          $orderTotal = $total + $orderTotal;



                       ?>
                      <tr>
                        <td><?php echo $arreglo[$i]['Cantidad'];  ?></td>
                        <td><?php echo $arreglo[$i]['NOMPRODUC'];  ?></td>
                        <td><?php echo  number_format($arreglo[$i]['VUNITARIO'],0,'.',',');  ?></td>
                        <td><?php echo number_format($total,0,'.',','); ?></td>
                      </tr>   
                      <?php 
                         };
                       ?>
                       <tr>
                         <td>Total Pedido</td>
                         <td ><?php echo number_format($orderTotal,0,'.',',');  ?></td>
                       </tr>
                  </tbody>
                  </table>


                

                  <div class="form-group">
                      <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='DemoFin.php'">Realizar Pedido</button>
                    </form>
                  </div>

                </div>
              </div>
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