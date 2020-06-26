<?php 

session_start();
      
include('../../MODELO/CONEXION/conexion.php');
$db=Db::conectar();

ob_start();
if (!isset($_SESSION['UserCli']) or !isset($_SESSION['pasClie'])){
    header("Location: ../ApprenticeViews/erroradmin.php");
}
ob_end_flush();

if (isset($_GET['id'])){
  $resultado =("SELECT * FROM producto WHERE IDPRODUCTO =".$_GET['id'])or die($db->error);
  $sql=$db->prepare($resultado);
  $sql->execute();
  if ($sql->columnCount()> 0) {
    $filas = $sql->fetch();

  }else{

echo "lo siento";

  }
  

}else{  //redirecionar
  header("Location: MenuPrincipalCliente.php");
}


 ?>


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
        <style type="text/css">
      
      h2  {
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
        <div class="row">
          <div class="col-md-6">
            <?php
            echo
             '<img src="data:image/jpg;base64,'.base64_encode($filas[5]).'"   width=250px height=250px>'
            ?> 
         </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $filas[2]; ?></h2>
            <p><?php echo $filas[3]; ?></p>
            <p><strong class="text-primary h4">$<?php echo $filas[4]; ?></strong></p>
            
           
            <p><a href="cart.php?id=<?php echo $filas[0]; ?>" class="buy-now btn btn-sm btn-primary">Agregar al carrito</a></p>

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