<?php 
    require_once('../../MODELO/CONEXION/conexion.php');
	require_once('../../MODELO/VO/ClienteVO.php');
	
	class CrudUsuario{

		public function __construct(){}

		//inserta los datos del usuario
		public function insertar($usuario){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO datoscliente VALUES(NULL,:rol,:name,:ciudad,:tdocumento,:document,:email,:nombre, :clave)');
		    $insert->bindValue('rol',$usuario->getROL());
			$insert->bindValue('name',$usuario->getNOMCLIENTE());
			$insert->bindValue('ciudad',$usuario->getCIUDCLIENTE());
			$insert->bindValue('tdocumento',$usuario->getTDCLIENTE());
			$insert->bindValue('document',$usuario->getDCMTOCLIENTE());
			$insert->bindValue('email',$usuario->getEMAILCLIENTE());
			$insert->bindValue('nombre',$usuario->getUSUARIOCLIENTE());
			//encripta la clave
			$pass=password_hash($usuario->getCONTRASENACLIENTE(),PASSWORD_DEFAULT);
			$insert->bindValue('clave',$pass);
			$insert->execute();
		}

		
	        public function obtenerUsuario($nombre,$clave){
        	#ESTABLECER LA CONEXION CON LA BASE DE DATOS
			$db=db::conectar();
			#ESTABLECER LA SENTENCIA DE SQL PARA LA CONSULTA PREPARADA
			$select=$db->prepare('SELECT * FROM datoscliente WHERE USUARIOCLIENTE=:nombre');
			#ENVIAR LOS PARAMETROS A LA SENTENCIA SQL 
			$select->bindValue('nombre',$nombre);
			#$select->bindValue('pas',$aprrenticies->getapPassaword());
			#EJECUTAR SENTENCIA SQL
			$select->execute();
			#CONVERTIR EL RESULTADO DE LA CONSULTA A UN ARREGLO
			$array=$select->fetch();

            
            #VALIDAR SI EL RESULTADO NO HAY NINGUN VALOR
			if (empty($array)) {
				#CERRAR CONEXION
				$db = null;
				$select = null;
				#RETORNAR EL RESPECTIVO MENSAJE
				return $array;
			#COMPARAR Y VALIDAR SI LA FICHA CORRESPONDE A LA CAPTURADA EN EL FORMULARIO UTILIZANDO EL METODO GET DE LA CLASE APPRENTICIE VO
			}

			else {
				#CERRAR CONEXION
				$db = null;
				$select = null;
				#SI LOS DATOS SON CORRECTOS RETORNAR CONFIRMACION
				return $array;
			}	

		}

		//busca el nombre del usuario si existe
		public function buscarUsuario($nombre){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM datoscliente WHERE USUARIOCLIENTE=:nombre');
			$select->bindValue('nombre',$nombre);
			$select->execute();
			$registro=$select->fetch();
			if($registro['IDCLIENTE']!=NULL){
				$usado=False;
			}else{
				$usado=True;
			}	
			return $usado;
		}
	}
?>