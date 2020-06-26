

<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Registro </title>
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

        label{

            color: black;

        }
</style>
</head>
<body>
   

    <form action="../../CONTROLADOR/CONTROLADORVENDEDOR/ControladorRegistro.php" method="post">
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <h2 class="h3 mb-3 text-black">REGISTRO</h2>
                    <div class="p-3 p-lg-5 border">
                        
                        <div class="form-group row">
                        <div class="form-group col-md-12    ">
                            <label for="rol" class="text-black">ROL <span class="text-danger">*</span></label>
                            <select id="rol"  name="rol" class="form-control">
                                <option name="rol">VENDEDOR</option>    
        
                            </select>
                        </div>
                            <div class="col-md-6">
                                <label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="col-md-6">
                                <label for="c_fname" class="text-black">Ciudad <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="ciudad" name="ciudad">
                            </div>

                            <div class="form-group col-md-12    ">
                            <label for="tdocumento" class="text-black">Tipo de documento <span class="text-danger">*</span></label>
                            <select id="tdocumento"  name="tdocumento" class="form-control">
                                <option name="tdocumento">C.C</option>    
                                <option name="tdocumento">T.I</option>    
                                <option name="tdocumento">Nit</option>        
                            </select>
                        </div>

                            <div class="col-md-12">
                                <label for="document" class="text-black">Numero de documento<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="document" name="document">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_companyname" class="text-black">Correo Electronico</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_address" class="text-black">Usuario <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Street address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_address" class="text-black">Contraseña <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="pas" name="pas">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="c_address" class="text-black">Validar Contraseña <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="password2" name="password2">
                                 
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-lg py-3 btn-block" name="registrarse">Registrar Vendedor</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>

</body>
</html>
