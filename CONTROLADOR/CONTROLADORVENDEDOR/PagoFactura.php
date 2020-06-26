<?php
    //inicio de sesion
        require_once('../../MODELO/CONEXION/conexion.php');

    $db = DB::conectar();
    $resultado = ('SELECT * FROM factura ') ;
    $sql = $db->prepare($resultado);
    $sql->execute();
     while ($fila = $sql->fetch()) {

    if (isset($_POST['factura'])) {
    	$id = $_GET['id'];
    	if ($fila['ESTADO'] == 'NOPAGO') {   		
	   		 $producto = 'PAGADA';
	   		 $query = "UPDATE factura set ESTADO ='$producto' WHERE IDFACTURA = '$id'";
	   	 	 $resultado = $db->query($query);
	   	 	 if ($resultado) {
		         echo "<script type='text/javascript'>alert('Pago exitoso')
		            window.location.href='../../VISTA/VISTAVENDEDOR/Usuariofactura.php';
		            </script>"; 
		        }else{
		        	 echo "<script type='text/javascript'>alert('Error al pagar')
		            window.location.href='../../VISTA/VISTAVENDEDOR/Usuariofactura.php';
		            </script>"; 
		        }
		    }
		}
	}

?>

