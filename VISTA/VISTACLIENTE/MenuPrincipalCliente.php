<?php
session_start();
ob_start();
if (!isset($_SESSION['UserCli']) or !isset($_SESSION['pasClie'])){
    header("Location: ../../VISTA/VISTAVENDEDOR/IngresoCliente.php");
}
ob_end_flush();
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
      
      h3{
        text-transform: uppercase;
      }

      p{
        text-transform: uppercase;
      }

    </style>
    
  </head>
  <body>
  
  <div class="site-wrap">
    <?php include("layouts/header.php"); ?> 

    <div class="site-section text-center">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-12 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">

                <div class="float-md-left mb-4"><h2 class="text-black h5">Comprar Todo</h2></div>
              </div>
            </div>
            <div class="row mb-5">

              <?php
              include('../../MODELO/CONEXION/conexion.php');
              $db=Db::conectar();  

              $resultado = ('SELECT * FROM producto WHERE ESTADO = "EN VENTA"  order by IDPRODUCTO DESC') ;
              $sql = $db->prepare($resultado);
              $sql->execute();
              while ($fila = $sql->fetch()) {
              

              ?>

                  <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                    <div class="block-4 text-center border">
                     
                      <figure class="block-5-image ">
                         <a href="shop-single.php?id=<?php echo $fila['IDPRODUCTO'];?>">
                           <?php 
                           echo
                       '<img src="data:image/jpg;base64,
                            '.base64_encode($fila['IMG']).'"  width=200px height=200px>'?>
                          </a>
                         </figure>'
                         
                      <div class="block-4-text p-4">
                          <h3><a href="shop-single.php?id=<?php echo $fila['IDPRODUCTO'];?>"><?php echo $fila['NOMPRODUC']; ?></a></h3>
                        <p class="mb-0"><?php echo $fila['NUMBOLSA']; ?></p>
                        <p class="text-primary font-weight-bold">$<?php echo $fila['VUNITARIO']; ?></p>
                      </div>
                    </div>
                  </div>
            <?php } ?>


            </div>        
      </div>
    </div>
    <?php include("./layouts/footer.php"); ?> 

    
  </div>
</div>
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