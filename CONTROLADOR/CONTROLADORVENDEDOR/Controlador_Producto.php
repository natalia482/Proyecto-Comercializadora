<?php
require_once('../../MODELO/CONEXION/conexion.php');
require_once('../../MODELO/DAO/ProductoDao.php');

$db = DB::conectar();

$producto = new Producto();
$crud = new crudProducto();


if(isset($_POST['insertar'])){

$producto ->setTIPOPLANTA($_POST['tipo']);
$producto ->setNOMPRODUC($_POST['nameproduc']);
$producto -> setNUMBOLSA($_POST['numbol']);
$producto -> setVUNITARIO($_POST['vuni']);
$cargarFoto =($_FILES['foto']['tmp_name']);
$producto -> setIMG(fopen($cargarFoto, 'rb')) ;//leer binario 
$producto ->setESTADO($_POST['estado']);

if ($crud->buscarProducto($_POST['nameproduc'])){
			$crud->insertarProducto($producto);
			 header('location:..\..\VISTA\VISTAVENDEDOR\menuprincipal.php');

		}else{
			echo "<script type='text/javascript'>alert('El producto ya existe')
			window.location.href='../../VISTA/VISTAVENDEDOR/Subidaimagen.php';
			</script>";		
		}	

	}	



?>
