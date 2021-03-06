<?php
session_start();
ob_start();
if (!isset($_SESSION['UserCli']) or !isset($_SESSION['pasClie'])){
    header("Location: ../ApprenticeViews/erroradmin.php");
}
ob_end_flush();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>LISTA MATERIAL</title>
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
    
    th{

      text-transform: uppercase;

    }
  </style>

  </head>
  <body>
  
  <div class="site-wrap">
    <?php include("layouts/header.php"); ?> 
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">LISTA PEDIDOS</h2></div>

              </div>
            </div>

              <table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">IDFACTURA</th>
      <th scope="col">IDCLIENTE</th>
      <th scope="col">FECHAFACTURA</th>
      <th scope="col">NOMBRE CLIENTE</th>

    </tr>
  </thead>

    <?php 
include('../../MODELO/CONEXION/conexion.php');
    $db=Db::conectar();

    if (isset($_GET['idcliente'])){

    $resultado =$db->prepare('SELECT * FROM detallefactura 
      INNER JOIN factura ON factura.idfactura = detallefactura.IDFACTURA 
      JOIN datoscliente ON factura.IDCLIENTE = datoscliente.IDCLIENTE 
      WHERE datoscliente.IDCLIENTE = '.$_GET['idcliente'])
    or die($db->error);
    $resultado->execute();
    $resul =$resultado->rowCount();
  }
    if ($resul > 0) {
      while ($filas = $resultado->fetch()) {


 ?>
  <tbody>
    <tr>
      <th scope="row "><a href="../../factura/Factura1.php?idfactura=<?php echo $filas['idfactura']; ?>"><?php echo  $filas['0']; ?></a></th>
      <th scope="row"><a href="../../factura/Factura1.php?idfactura=<?php echo $filas['idfactura']; ?>"><?php echo $filas['5']; ?></a></th>
      <th scope="row"><a href="../../factura/Factura1.php?idfactura=<?php echo $filas['idfactura']; ?>"><?php echo $filas['7']; ?></a></th>
      <th scope="row"><a href="../../factura/Factura1.php?idfactura=<?php echo $filas['idfactura']; ?>"><?php echo $filas['10']; ?></a></th>

    </tr>
    
  </tbody>
  <?php 
}}
   ?>
</table>



  <p><a href="MenuPrincipalCliente.php" class="btn btn-sm btn-primary">VOLVER</a></p>
</div>
</div>
</div>
</div>
</div>
<?php include("layouts/footer.php"); ?>
</div>


  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>

  <script src="../js/main.js"></script>
    
  </body>
</html>