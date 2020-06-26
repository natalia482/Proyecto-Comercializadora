
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="./bs3.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factura</title>
    <style type="text/css">
        h1{
            text-align: center;
            margin: 0px;

        }
        h3{
            text-align: center;
             letter-spacing: 0px;
             margin: 0px;
        }

        h5.Fecha{

            text-align: left;
                    letter-spacing: 0px;
                    margin:0px;


        }

        h4{
                    text-align: center;
                    letter-spacing: 0px;
                    margin:0px;

        }
        p{
            text-align: center;
            margin: 0;
        }
        p.NOMBRE{
            text-align: left;
            margin: 0;
        }

        p.CIUDAD{
            text-align: left;
            margin: 0;
        }

        
    </style>
</head>
<body>
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-8 ">
            <h3>Vivero & Comercializadora</h3>
            <h1>EL MANANTIAL</h1>
            <p>MIRIAN ALICIA RODRIGUEZ AGUDELO</p>
            <p>NIT 20.391.547-6/RÉGIMEN SIMPLIFICADO</p>
            <p>C.C CENTRO POBLADO CHINAUTA - 300 3112013 / 302 3650262 </p>

        </div>
    </div>
</div>
<?php 
    include('../MODELO/CONEXION/conexion.php');
    $db=Db::conectar();

    if (isset($_GET['idfactura'])){

    $resultado =$db->prepare('SELECT DISTINCT datoscliente.NOMCLIENTE,datoscliente.CIUDCLIENTE,datoscliente.EMAILCLIENTE,datoscliente.TDCLIENTE,datoscliente.DCMTOCLIENTE,factura.idfactura,factura.FECHAFACTURA,factura.TOTALFACTURA FROM datoscliente INNER JOIN factura on factura.IDCLIENTE=datoscliente.IDCLIENTE WHERE factura.idfactura = '.$_GET['idfactura'])
    or die($db->error);
    $resultado->execute();
    $resul =$resultado->rowCount();
   
  
    if ($resul > 0) {
      while ($filas = $resultado->fetch()) {


 ?>

    <hr>

    <div class="row">
        <div class="col-sm-8 ">
            <h4 class="ID">FACTURA DE VENTA <br> <?php echo $filas['5'];  ?> </h4>          
            <h5 class="Fecha">Fecha <?php echo $filas['6'];  ?></h5> <br>
            <p class="NOMBRE">Nombre &nbsp;<?php echo $filas['0'];  ?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $filas['3'];?>&nbsp;<?php echo $filas['4'];?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Ciudad&nbsp; <?php echo $filas['1'];  ?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             Correo&nbsp;<?php echo $filas['2'];  ?>
            </p>
        </div>

    </div>


</div>


    <?php }}} ?>
    </div>
<hr>


    <div class="row">
        <div class="col-xs-12">
            <table class="table table-condensed table-bordered table-striped">
                <thead>
                <tr>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Precio unitario</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
    <?php 
    $resultado =$db->prepare('SELECT  DISTINCT datoscliente.IDCLIENTE,factura.idfactura,factura.FECHAFACTURA,factura.TOTALFACTURA, detallefactura.CANTIDADPRODUCTO,detallefactura.TOTALPRODUCTO,producto.NOMPRODUC,producto.NUMBOLSA, producto.VUNITARIO FROM datoscliente 
        INNER JOIN factura on factura.IDCLIENTE=datoscliente.IDCLIENTE 
        INNER JOIN detallefactura ON detallefactura.IDFACTURA = factura.idfactura 
        INNER JOIN producto ON producto.IDPRODUCTO = detallefactura.IDPRODUCTO 
        WHERE factura.idfactura = '.$_GET['idfactura']) or die($db->error);
    $resultado->execute();
    $resul =$resultado->rowCount();
   
  
    if ($resul > 0) {
      while ($fila = $resultado->fetch()) {


 ?>
                        <td><?php echo $fila['6'] ?></td>
                        <td><?php echo $fila['4'] ?></td>
                        <td>$<?php echo number_format($fila['8'], 2) ?></td>
                        <td>$<?php echo number_format($fila['5'], 2) ?></td>
                    </tr>
<?php }} ?>
                <tr>
                <?php 
    $resultado =$db->prepare('SELECT DISTINCT datoscliente.IDCLIENTE,factura.idfactura,factura.TOTALFACTURA
                                FROM datoscliente
                                INNER JOIN factura ON factura.IDCLIENTE = datoscliente.IDCLIENTE

                                WHERE factura.idfactura ='.$_GET['idfactura']) or die($db->error);
    $resultado->execute();
    $resul =$resultado->rowCount();
  
    if ($resul > 0) {
      while ($Total = $resultado->fetch()) {


 ?>
    
                    <td colspan="2" >
                        <h4>Total</h4>
                    </td>
                    <td>
                        <h4>$<?php echo number_format($Total['2'], 2) ?></h4>
                    </td>
                <?php }}  ?>
                </tr>
            </table>
        </div>
    </div>

</body>
</html>