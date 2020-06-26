<?php

session_start();
include('../../MODELO/CONEXION/conexion.php');
if (!isset($_SESSION['UserVen']) or !isset($_SESSION['PasVen'])){
    header("Location: ../../VISTA/VISTAVENDEDOR/IngresoVendedor.php");
}
if (isset($_GET['id'])) {
    $db=DB::conectar();
    $buscar=('SELECT * FROM producto 
        WHERE IDPRODUCTO =' .$_GET['id']);
    $sql = $db->prepare($buscar);
    $sql->execute();
    while ($fila = $sql->fetch()) {
              

         


?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Actualizar Producto </title>
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

    <form action="../../CONTROLADOR/CONTROLADORVENDEDOR/ActualizarProducto.php?id=<?php echo $fila['IDPRODUCTO']; ?>" method="post" enctype="multipart/form-data">
    <div class="site-section">
                <?php include("layouts/header.php"); ?> 

        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <h2 class="h3 mb-3 text-black">ACTUALIZAR PRODUCTO</h2>
                    <div class="p-3 p-lg-5 border">

                         <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_fname" class="text-black" >Id Producto <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" 
                                placeholder="<?php echo $fila['IDPRODUCTO']; ?>"  id="id" name="id">
                            </div>
                        </div>
                  
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_fname" class="text-black" >Nombre Planta <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nameproducto" name="nameproducto" value="<?php echo $fila['NOMPRODUC']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_companyname" class="text-black">Numero bolsa </label>
                                <input type="text" class="form-control" id="numbol" name="numbol" placeholder="<?php echo $fila['NUMBOLSA']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_address" class="text-black">Valor unitario <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="vunitario" name="vunitario" value="<?php echo $fila['VUNITARIO']; ?>">
                            </div>
                            
                        </div>
    
                        <div class="form-group row">
                          
                             <div class="form-group">
                            <button class="btn btn-primary btn-lg py-3 btn-block" id="actualizar" name="actualizar">Actualizar</button>
                            </div>
                        </div>
                    </div>

</form>
                <?php 
            }}
                 ?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
