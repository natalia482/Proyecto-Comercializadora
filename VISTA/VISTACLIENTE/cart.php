<?php

session_start();

include('../../MODELO/CONEXION/conexion.php');
ob_start();
if (!isset($_SESSION['UserCli']) or !isset($_SESSION['pasClie'])){
    header("Location: ../ApprenticeViews/erroradmin.php");
}
ob_end_flush();

      $db=Db::conectar();
      if (isset($_SESSION['carrito'])){
        //si existe buscamos si estaba agregado el producto
        if (isset($_GET['id'])){
          $arreglo = $_SESSION['carrito'];
          $encontro=false;
          $numero=0;
          for ($i=0; $i<count($arreglo); $i++) { 
            if ($arreglo[$i]['IDPRODUCTO'] == $_GET['id']) {
              $encontro=true;
              $numero=$i;
            }
          }
          if ($encontro == true) {
            $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
            $_SESSION['carrito']=$arreglo;
          }else{
            // No estaba el registro
            $nombre="";
            $precio ="";
            $imagen ="";

            $res = ('SELECT * FROM producto WHERE IDPRODUCTO='.$_GET['id']) or die($db->error);
            $sql=$db->prepare($res);
            $sql->execute();
                $filas = $sql->fetch();
                $nombre = $filas[2];
                $precio = $filas[4];
                $imagen = $filas[5];

                $arregloNuevo  = array(
                  'IDPRODUCTO' =>$_GET['id'],
                  'NOMPRODUC' => $nombre, 
                  'VUNITARIO' => $precio,
                 'IMG' => $imagen,
                 'Cantidad' => 1
               );
                array_push($arreglo,$arregloNuevo);
                $_SESSION['carrito']=$arreglo;
          }
        }
      }else{
        // creamos la variable de sesión
        if (isset($_GET['id'])) {
          $nombre="";
          $precio ="";
          $imagen ="";

          $res = ('SELECT * FROM producto WHERE IDPRODUCTO='.$_GET['id']) or die($db->error);
          $sql=$db->prepare($res);
          $sql->execute();
              $filas = $sql->fetch();
              $nombre = $filas[2];
              $precio = $filas[4];
              $imagen = $filas[5];

              $arreglo[]  = array(
                'IDPRODUCTO' =>$_GET['id'],
                'NOMPRODUC' => $nombre, 
                'VUNITARIO' => $precio,
               'IMG' => $imagen,
               'Cantidad' => 1
             );

              $_SESSION['carrito']=$arreglo;


        }
      }

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tienda </title>
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
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Producto</th>
                    <th class="product-price">Precio</th>
                    <th class="product-quantity">Cantidad</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $total = 0;
                  if (isset($_SESSION['carrito'])){
                    $arregloCarrito = $_SESSION['carrito'];
                    for ($i=0; $i <count($arregloCarrito); $i++) {
                      $total = $total + ($arregloCarrito[$i]['VUNITARIO'] * $arregloCarrito[$i]['Cantidad']);
                   ?>
                  <tr>
                    <td class="product-thumbnail">
                  <?php
                    echo
                     '<img src="data:image/jpg;base64,'.base64_encode($arregloCarrito[$i]['IMG']).'"  width=200px height=200px>'
                        ?>   
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $arregloCarrito[$i]['NOMPRODUC']; ?></h2>
                    </td>
                    <td>$<?php  echo number_format($arregloCarrito[$i]['VUNITARIO'],0,'.',','); ?></td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus btnIncrementar" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center txtCantidad"
                            data-precio="<?php echo $arregloCarrito[$i]['VUNITARIO']; ?>" 
                            data-id="<?php echo $arregloCarrito[$i]['IDPRODUCTO']; ?>" 
                            value="<?php echo $arregloCarrito[$i]['Cantidad']; ?>"
                             placeholder="cantidad" aria-label="Example text with button addon" 
                             aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus btnIncrementar" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td class="cant<?php echo $arregloCarrito[$i]['IDPRODUCTO']; ?>">
                      $<?php echo number_format($arregloCarrito[$i]['VUNITARIO']*$arregloCarrito[$i]['Cantidad'],0,'.',',');?>
                        
                      </td>
                    <td><a href="#" class="btn btn-primary btn-sm btnEliminar" 
                      data-id="<?php echo $arregloCarrito[$i]['IDPRODUCTO'];?>">X</a></td>
                  </tr>
                  <?php
                  } }
                   ?>
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <a href="cart.php"><button class="btn btn-primary btn-sm btn-block">Cargar Carrito</button></a>
              </div>
              <div class="col-md-6">
               <a href="menuprincipalcliente.php"> <button class="btn btn-outline-primary btn-sm btn-block">Continuar Comprando</button></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Total Carrito</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$ <?php echo number_format($total,0,'.',',');  ?></strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$<?php echo number_format($total,0,'.',',');?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.php'">Proceder a comprar</button>
                  </div>
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

  <script >
    $(document).ready(function() {
      $(".btnEliminar").click(function(event){
        event.preventDefault();
       var id = $(this).data('id');
       var boton = $(this);
       
       $.ajax({

        method:'POST',
        url: '../../CONTROLADOR/CONTROLADORCLIENTE/eliminarcarrito.php',
        data:{
          id:id
        }

       }).done(function(respuesta){
        boton.parent('td').parent('tr').remove();
       });
      });

    $(".txtCantidad").keyup(function(){

      //para funcionamiento del input

      var cantidad = $(this).val();
      var precio = $(this).data('precio');
      var id = $(this).data('id');
      incrementar(cantidad,precio,id);

    });

    $(".btnIncrementar").click(function(){
      var precio = $(this).parent('div').parent('div').find('input').data('precio');
      var id = $(this).parent('div').parent('div').find('input').data('id');
      var cantidad = $(this).parent('div').parent('div').find('input').val();
      incrementar(cantidad,precio,id);

    });

    function incrementar(cantidad,precio,id){

      //para funcionamiento de los botones de cantidad

      var mult = parseFloat(cantidad)* parseFloat(precio);
      $(".cant" + id).text("$" + mult);
           $.ajax({

        method:'POST',
        url: './../CONTROLADOR/CONTROLADORCLIENTE/Actualizar.php',
        data:{
          id:id,
          cantidad:cantidad 
        }

       }).done(function(respuesta){
       });

    }
    });
  </script>
    
  </body>
</html>