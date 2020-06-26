<?php 
	/*
	*
	*
	*/
	class Vendedor{
		private $IDVENDEDOR;
		private $ROL;
		private $NOMVENDEDOR;
		private $CIUDADVENDEDOR;
		private $TDVENDEDOR;
		private $DCMTOVENDEDOR;
		private $EMAILVENDEDOR;
		private $USUARIOVENDEDOR;
		private $CONTRASENAVENDEDOR;

	public function getIDVENDEDOR(){
		return $this->IDVENDEDOR;
	}

	public function setIDVENDEDOR($IDVENDEDOR){
		$this->IDVENDEDOR = $IDVENDEDOR;
	}
		public function getROL(){
		return $this->ROL;
	}

	public function setROL($ROL){
		$this->ROL = $ROL;
	}
	public function getNOMVENDEDOR(){
		return $this->NOMVENDEDOR;
	}

	public function setNOMVENDEDOR($NOMVENDEDOR){
		$this->NOMVENDEDOR = $NOMVENDEDOR;
	}

	public function getCIUDADVENDEDOR(){
		return $this->CIUDADVENDEDOR;
	}

	public function setCIUDADVENDEDOR($CIUDADVENDEDOR){
		$this->CIUDADVENDEDOR = $CIUDADVENDEDOR;
	}

	public function getTDVENDEDOR(){
		return $this->TDVENDEDOR;
	}

	public function setTDVENDEDOR($TDVENDEDOR){
		$this->TDVENDEDOR = $TDVENDEDOR;
	}

	public function getDCMTOVENDEDOR(){
		return $this->DCMTOVENDEDOR;
	}

	public function setDCMTOVENDEDOR($DCMTOVENDEDOR){
		$this->DCMTOVENDEDOR = $DCMTOVENDEDOR;
	}

	public function getEMAILVENDEDOR(){
		return $this->EMAILVENDEDOR;
	}

	public function setEMAILVENDEDOR($EMAILVENDEDOR){
		$this->EMAILVENDEDOR = $EMAILVENDEDOR;
	}

	public function getUSUARIOVENDEDOR(){
		return $this->USUARIOVENDEDOR;
	}

	public function setUSUARIOVENDEDOR($USUARIOVENDEDOR){
		$this->USUARIOVENDEDOR = $USUARIOVENDEDOR;
	}

	public function getCONTRASENAVENDEDOR(){
		return $this->CONTRASENAVENDEDOR;
	}

	public function setCONTRASENAVENDEDOR($CONTRASENAVENDEDOR){
		$this->CONTRASENAVENDEDOR = $CONTRASENAVENDEDOR;
	}
}
?>