<?php
	//inicio de sesion
    session_start();
    require_once('../../MODELO/CONEXION/conexion.php');
	require_once('../../MODELO/VO/VendedorVO.php');
	require_once('../../MODELO/DAO/VendedorDao.php');

	$usuario=new Vendedor();
	$crud=new CrudUsuarioVendedor();

	if (isset($_POST['entrar'])){
    	$usuario->setUSUARIOVENDEDOR($_POST['usuario']);
    	$usuario->setCONTRASENAVENDEDOR($_POST['pas']);
        $result = $crud->obtenerUsuariovendedor($_POST['usuario'],$_POST['pas']);
        
		if ($result['ROL'] == "VENDEDOR") {
			if (password_verify($_POST['pas'],$result['CONTRASENAVENDEDOR'])){

			    $_SESSION['UserVen'] = $result['USUARIOVENDEDOR'];
			    $_SESSION['PasVen'] = $result['CONTRASENAVENDEDOR'];
			   $_SESSION['useridVen'] = $result['IDVENDEDOR'];
				header('Location: ../../VISTA/VISTAVENDEDOR/menuprincipal.php');
			}else{
				session_destroy();
   	        		echo "<script type='text/javascript'>alert('Usuario o contraseñas incorrectas')
			window.location.href='../../VISTA/VISTAVENDEDOR/IngresoVendedor.php';
			</script>";

			}			
		}else{
			session_destroy();
   	      		echo "<script type='text/javascript'>alert('Usuario')
			window.location.href='../../VISTA/VISTAVENDEDOR/IngresoVendedor.php';
			</script>";
		}	
	}
?>