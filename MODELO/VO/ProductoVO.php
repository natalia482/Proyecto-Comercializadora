<?php 

/**
 * 
 */
class Producto{

		private $IDPRODUCTO;
		private $TIPOPLANTA;
		private $NOMPRODUC;
		private $NUMBOLSA;
		private $VUNITARIO;
		private $IMG;
		private $ESTADO;
			public function getIDPRODUCTO(){
		return $this->IDPRODUCTO;
	}

	public function setIDPRODUCTO($IDPRODUCTO){
		$this->IDPRODUCTO = $IDPRODUCTO;
	}

	public function getTIPOPLANTA(){
		return $this->TIPOPLANTA;
	}

	public function setTIPOPLANTA($TIPOPLANTA){
		$this->TIPOPLANTA = $TIPOPLANTA;
	}

	public function getNOMPRODUC(){
		return $this->NOMPRODUC;
	}

	public function setNOMPRODUC($NOMPRODUC){
		$this->NOMPRODUC = $NOMPRODUC;
	}

	public function getNUMBOLSA(){
		return $this->NUMBOLSA;
	}

	public function setNUMBOLSA($NUMBOLSA){
		$this->NUMBOLSA = $NUMBOLSA;
	}

	public function getVUNITARIO(){
		return $this->VUNITARIO;
	}

	public function setVUNITARIO($VUNITARIO){
		$this->VUNITARIO = $VUNITARIO;
	}

	public function getIMG(){
		return $this->IMG;
	}

	public function setIMG($IMG){
		$this->IMG = $IMG;
	}

	public function getESTADO(){
		return $this->ESTADO;
	}

	public function setESTADO($ESTADO){
		$this->ESTADO = $ESTADO;
	}

	
}





 ?>