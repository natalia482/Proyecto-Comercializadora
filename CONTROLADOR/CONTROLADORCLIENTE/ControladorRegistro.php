<?php
	//inicio de sesion

    require_once('../../MODELO/CONEXION/conexion.php');
	require_once('../../MODELO/VO/ClienteVO.php');
	require_once('../../MODELO/DAO/ClienteDao.php');

	$usuario=new Usuario();
	$crud=new CrudUsuario();
	//verifica si la variable registrarse está definida
	//se da que está definicda cuando el usuario se loguea, ya que la envía en la
    // petición
	if (isset($_POST['registrarse'])) {

		$usuario->setROL($_POST['rol']);
		$usuario->setNOMCLIENTE($_POST['name']);
		$usuario->setCIUDCLIENTE($_POST['ciudad']);
		$usuario->setTDCLIENTE($_POST['tdocumento']);
		$usuario->setDCMTOCLIENTE($_POST['document']);
		$usuario->setEMAILCLIENTE($_POST['email']);
		$usuario->setUSUARIOCLIENTE($_POST['nombre']);
		$usuario->setCONTRASENACLIENTE($_POST['pas']);
		$valid=$_POST['pas2'];

		if ($crud->buscarUsuario($_POST['nombre'])) {
			if ($valid == $_POST['pas']) {
			$crud->insertar($usuario);
			header('Location: ../../VISTA/VISTACLIENTE/IngresoCliente.php');
		}else{

			echo "<script type='text/javascript'>alert('Contraseñas Incorrectas')
			window.location.href='../../VISTA/VISTACLIENTE/RegistroCliente.html';
			</script>";

			}
		}else{
			echo "<script type='text/javascript'>alert('Usuario ya existe')
			window.location.href='../../VISTA/VISTACLIENTE/RegistroCliente.html';
			</script>";
		}		
		
	}
?>