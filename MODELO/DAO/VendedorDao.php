<?php 
    require_once('../../MODELO/CONEXION/conexion.php');
  require_once('../../MODELO/VO/VendedorVO.php');
  
  class CrudUsuarioVendedor{

    public function __construct(){}

    //inserta los datos del usuario
    public function insertar($usuario){
      $db=DB::conectar();
      $insert=$db->prepare('INSERT INTO datosvendedor VALUES(NULL,:rol,:name,:ciudad,:tdocumento,:document,:email,:nombre, :clave)');
      $insert->bindValue('rol',$usuario->getROL());
      $insert->bindValue('name',$usuario->getNOMVENDEDOR());
      $insert->bindValue('ciudad',$usuario->getCIUDADVENDEDOR());
      $insert->bindValue('tdocumento',$usuario->getTDVENDEDOR());
      $insert->bindValue('document',$usuario->getDCMTOVENDEDOR());
      $insert->bindValue('email',$usuario->getEMAILVENDEDOR());
      $insert->bindValue('nombre',$usuario->getUSUARIOVENDEDOR());
      //encripta la clave
      $pass=password_hash($usuario->getCONTRASENAVENDEDOR(),PASSWORD_DEFAULT);
      $insert->bindValue('clave',$pass);
      $insert->execute();
    }

    //obtiene el usuario para el login
    public function obtenerUsuariovendedor($nombre,$clave){
          #ESTABLECER LA CONEXION CON LA BASE DE DATOS
      $db=db::conectar();
      #ESTABLECER LA SENTENCIA DE SQL PARA LA CONSULTA PREPARADA
      $select=$db->prepare('SELECT * FROM datosvendedor WHERE USUARIOVENDEDOR=:nombre');
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
    public function buscarUsuariovendedor($nombre){
      $db=Db::conectar();
      $select=$db->prepare('SELECT * FROM datosvendedor WHERE USUARIOVENDEDOR=:nombre');
      $select->bindValue('nombre',$nombre);
      $select->execute();
      $registro=$select->fetch();
      if($registro['IDVENDEDOR']!=NULL){
        $usado=False;
      }else{
        $usado=True;
      } 
      return $usado;
    }
  }
?>