<?php
	//inicio de sesion
	session_start();
    require_once('../../MODELO/CONEXION/conexion.php');
    

if(isset($_POST['salir'])){ // cuando presiona el botòn salir
		header('Location: ../../VISTA/VISTACLIENTE/IngresoCliente.php');
		unset($_SESSION['UserCli']); //destruye la sesión
	    unset($_SESSION['pasClie'] ); //destruye la sesión
	    unset($_SESSION['userid'] ); //destruye la sesión

			}
?>