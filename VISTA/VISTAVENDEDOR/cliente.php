<?php
session_start();
ob_start();
if (!isset($_SESSION['UserVen']) or !isset($_SESSION['PasVen'])){
    header("Location: ../../VISTA/VISTAVENDEDOR/IngresoVendedor.php");
}
ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Clientes</title>
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
    <?php include("layouts/header.php"); ?> 

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-sm-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Clientes</h2></div>
                <div class="d-flex">
           
                </div>
              </div>
            </div>
            <div class="row mb-5">

             <table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">CIUDAD</th>
      <th scope="col">EMAIL</th>
      <th scope="col">FACTURAS CLIENTES</th>

    </tr>
  </thead>
   <?php

   include('../../MODELO/CONEXION/conexion.php');
    $db=Db::conectar();

    $resultado = ('SELECT * FROM datoscliente ') ;
    $sql = $db->prepare($resultado);
    $sql->execute();
    while ($fila = $sql->fetch()) {
      ?>
      <tbody>
        <tr>
          <th scope="row"><?php echo $fila['IDCLIENTE']; ?></th>
          <th scope="row"><?php echo $fila['NOMCLIENTE']; ?></th>
          <th scope="row"><?php echo $fila['CIUDCLIENTE']; ?></th>
          <th scope="row"><?php echo $fila['EMAILCLIENTE']; ?></th>
          <th>
            <div class="form-group">
              <a href="facturasclientes.php">
                <button class="btn btn-primary " name="salir">facturacliente</button>
              </a>
             </div>
          </th>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
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