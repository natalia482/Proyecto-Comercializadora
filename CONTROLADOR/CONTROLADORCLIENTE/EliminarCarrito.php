<?php

session_start();
$arreglo = $_SESSION['carrito'];
for ($i=0; $i < count($arreglo) ; $i++) {
	if ($arreglo[$i]['IDPRODUCTO'] != $_POST['id']){
			$arregloNuevo[] = array(

			'IDPRODUCTO'=>$arreglo[$i]['IDPRODUCTO'],
			'NOMPRODUC'=>$arreglo[$i]['NOMPRODUC'],
			'VUNITARIO'=>$arreglo[$i]['VUNITARIO'],
			'IMG'=>$arreglo[$i]['IMG'],
			'Cantidad'=>$arreglo[$i]['Cantidad']
		);
	}
}

if (isset($arregloNuevo)) {

	$_SESSION['carrito']=$arregloNuevo;
	
}else{
	//quiere decir que el registro a eliminar es el unico que habia
	unset($_SESSION['carrito']);
  }

  echo "listo";

  ?>
