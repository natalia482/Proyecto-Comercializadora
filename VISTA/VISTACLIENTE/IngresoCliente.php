
<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Ingreso Cliente  </title>
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

        div .FONDO{

            background-color:#B4B9B0;
        }

    </style>
</head>
<body>

    <form action="../../CONTROLADOR/CONTROLADORCLIENTE/ControladorLogin.php" method="post">
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-8 mb-5 mb-md-0">
                    <h2 class="h1 mb-3 text-black text-center">INGRESO</h2>
                    <div class="p-3 p-lg-5 border FONDO">             
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label class="text-black">USUARIO <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="usuario" name="usuario" autocomplete="off">
                            </div>
                        </div>

                            <div class="col-md-12">
                                <label  class="text-black">CONTRASEÑA<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="pas" name="pas">
                            </div>
                            <br>

                            <div class="col-md-12">
                                <strong><p><a href="Registrocliente.html">¿REGISTRARSE?</a></p></strong>
                            </div>
                        </div>        
                        <div class="form-group">
                            <button class="btn btn-primary btn-lg py-3 btn-block" name="entrar">Ingreso</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>

</body>
</html>
