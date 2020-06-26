<?php
session_start();

if (!isset($_SESSION['UserVen']) or !isset($_SESSION['PasVen'])){
    header("Location: ../../VISTA/VISTAVENDEDOR/IngresoVendedor.php");
}

?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Registro Producto </title>
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
    
   input{
        text-transform: uppercase;
      }

      p{
        text-transform: uppercase;
      }



  </style>
  
    

</head>
<body>

    <form action="../../CONTROLADOR/CONTROLADORVENDEDOR/Controlador_Producto.php" method="POST" enctype="multipart/form-data">
    <div class="site-section">
                <?php include("layouts/header.php"); ?> 

        <div class="container text-center">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                <br>
                <br>
                    <h2 class="h3 mb-4 text-black text-center">SUBIDA IMAGEN</h2>
                    <div class="p-3 p-lg-5 border">
                        <div class="form-group">
                            <label for="c_country" class="text-black">Tipo de planta <span class="text-danger">*</span></label>
                            <select id="tipo" name="tipo" class="form-control">
                                <option name="tipo">Seleccione el tipo de planta</option>    
                                <option name="tipo">Ornamental</option>    
                                <option name="tipo">Bonsai</option>    
                                <option name="tipo">Flor</option>    
                                <option name="tipo">Abonos</option>    
                                <option name="tipo">Cactus</option>    
                                <option name="tipo">Suculentas</option>    
   
                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_fname" class="text-black" >Nombre Planta <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nameproduc" name="nameproduc">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_companyname" class="text-black">Numero bolsa </label>
                                <input type="text" class="form-control" id="numbol" name="numbol">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_address" class="text-black">Valor unitario <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="vuni" name="vuni" min="" value="0" step="1" >
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_state_country" class="text-black">Imagen <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="foto" name="foto">
                            </div>
                            <br>
                            <br>
                             <br>
                          
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_address" class="text-black">ESTADO <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="estado" name="estado" value="EN VENTA">
                            </div>
                        </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-lg py-3 btn-block" name="insertar" id="insertar">Ingresar Producto</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
