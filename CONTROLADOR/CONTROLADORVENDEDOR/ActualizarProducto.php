<?php
    //inicio de sesion
        require_once('../../MODELO/CONEXION/conexion.php');

    $db = DB::conectar();

    $id = $_GET['id'];
    
    $nombrepro = $_POST['nameproducto'];
    $vunit = $_POST['vunitario'];

    $query = "UPDATE producto set NOMPRODUC ='$nombrepro', VUNITARIO = '$vunit' WHERE IDPRODUCTO = '$id'";

    $resultado = $db->query($query);

    if ($resultado) {
         echo "<script type='text/javascript'>alert('El producto fue modificado exitosamente')
            window.location.href='../../VISTA/VISTAVENDEDOR/Listamaterial.php';
            </script>"; 
     }else{
        echo "No se modifico";
     }
 
    


?>

