<?php
    //inicio de sesion
        require_once('../../MODELO/CONEXION/conexion.php');

    $db = DB::conectar();
    $resultado = ('SELECT * FROM producto ') ;
    $sql = $db->prepare($resultado);
    $sql->execute();
     while ($fila = $sql->fetch()) {

    if (isset($_POST['producto'])) {
    	$id = $_GET['id'];
    	if ($fila['ESTADO'] == 'EN VENTA') {   		
	   		 $producto = 'AGOTADO';
	   		 $query = "UPDATE producto set ESTADO ='$producto' WHERE IDPRODUCTO = '$id'";
	   	 	 $resultado = $db->query($query);
	   	 	 if ($resultado) {
		         echo "<script type='text/javascript'>alert('El producto fue agotado')
		            window.location.href='../../VISTA/VISTAVENDEDOR/Listamaterial.php';
		            </script>"; 
		        }else{
		        	 echo "<script type='text/javascript'>alert('Error al agotar')
		            window.location.href='../../VISTA/VISTAVENDEDOR/Listamaterial.php';
		            </script>"; 
		        }
		    }elseif ($fila['ESTADO'] = 'AGOTADO') {
	   		$producto = 'EN VENTA';
	    	$query = "UPDATE producto set ESTADO ='$producto' WHERE IDPRODUCTO = '$id'";
	   	 	 $resultado = $db->query($query);
	   	 	 if ($resultado) {
		         echo "<script type='text/javascript'>alert('El fue puesto en venta')
		            window.location.href='../../VISTA/VISTAVENDEDOR/Listamaterial.php';
		            </script>"; 
		        }else{
		        	 echo "<script type='text/javascript'>alert('Error al agotar')
		            window.location.href='../../VISTA/VISTAVENDEDOR/Listamaterial.php';
		            </script>"; 
		        }
		}
	}
}
?>

