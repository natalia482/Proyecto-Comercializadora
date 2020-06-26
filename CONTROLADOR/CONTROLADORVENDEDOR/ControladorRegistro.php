<?php
	//inicio de sesion
	session_start();
    require_once('../../MODELO/CONEXION/conexion.php');
	require_once('../../MODELO/VO/VendedorVO.php');
	require_once('../../MODELO/DAO/VendedorDao.php');

	$usuario=new Vendedor();
	$crud=new CrudUsuarioVendedor();
	//verifica si la variable registrarse está definida
	//se da que está definicda cuando el usuario se loguea, ya que la envía en la
    // petición
	if (isset($_POST['registrarse'])) {

		$usuario->setROL($_POST['rol']);
		$usuario->setNOMVENDEDOR($_POST['name']);
		$usuario->setCIUDADVENDEDOR($_POST['ciudad']);
		$usuario->setTDVENDEDOR($_POST['tdocumento']);
		$usuario->setDCMTOVENDEDOR($_POST['document']);
		$usuario->setEMAILVENDEDOR($_POST['email']);
		$usuario->setUSUARIOVENDEDOR($_POST['nombre']);
		$usuario->setCONTRASENAVENDEDOR($_POST['pas']);

		if ($crud->buscarUsuariovendedor($_POST['nombre'])) {
			$crud->insertar($usuario);
			header('Location: ../../VISTA/VISTAVENDEDOR/IngresoVendedor.php');
		}else{
			echo "<script type='text/javascript'>alert('Usuario ya existe')
			window.location.href='../../VISTA/VISTAVENDEDOR/registrovendedor.php';
			</script>";		
		}		
		
	}

?>