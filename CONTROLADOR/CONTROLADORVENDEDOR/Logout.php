<?php
	//inicio de sesion
	session_start();
    require_once('../../MODELO/CONEXION/conexion.php');
    

if(isset($_POST['salir'])){ // cuando presiona el botòn salir
		header('Location: ../../VISTA/VISTAVENDEDOR/IngresoVendedor.php');
		unset($_SESSION['UserVen']); //destruye la sesión
	    unset($_SESSION['PasVen'] ); //destruye la sesión
	    unset($_SESSION['useridVen'] ); //destruye la sesión

			}
?>