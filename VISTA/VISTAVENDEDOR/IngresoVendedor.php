
<!DOCTYPE html>
<html lang="en">
 <head>
    <title>INGRESO &mdash; VENDEDOR  </title>
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

        div.row{

            margin-top:10px;
            }


</style>
</head>
<body>
    <form action="../../CONTROLADOR/CONTROLADORVENDEDOR/ControladorLogin.php" method="post">

    <div class="site-section">
        <div class="container text-center">
            <div class="row ">
                <div class="col-md-6 mb-5 mb-md-0">

                    <strong><h2 class="h3 mb-5 text-black">INGRESO VENDEDOR</h2></strong>
                    <div class="p-3 p-lg-5 border">
                        
                        <div class="form-group row">
                            <div class="col-md-12">
                               <strong><label class="text-black">USUARIO <span class="text-danger">*</span></label></strong> 
                                <input type="text" class="form-control" id="usuario" name="usuario" autocomplete="off">
                            </div>
                        </div>

                            <div class="col-md-12">
                                <strong><label  class="text-black">CONTRASEÑA<span class="text-danger">*</span></label></strong>
                                <input type="password" class="form-control" id="pas" name="pas">
                            </div>
                        </div>        
                       
                         <div class="form-group">
                            <button class="btn btn-primary btn-lg py-3 btn-block" name="entrar">Ingresar</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

</body>
</html>
