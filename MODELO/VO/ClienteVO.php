<?php 
	/*
	*
	*
	*/
	class Usuario{
		private $IDCLIENTE;
		private $ROL;
		private $NOMCLIENTE;
		private $CIUDCLIENTE;
		private $TDCLIENTE;
		private $DCMTOCLIENTE;
		private $EMAILCLIENTE;
		private $USUARIOCLIENTE;
		private $CONTRASENACLIENTE;

	public function getIDCLIENTE(){
		return $this->IDCLIENTE;
	}

	public function setIDCLIENTE($IDCLIENTE){
		$this->IDCLIENTE = $IDCLIENTE;
	}
	public function getROL(){
		return $this->ROL;
	}

	public function setROL($ROL){
		$this->ROL = $ROL;
	}
	public function getNOMCLIENTE(){
		return $this->NOMCLIENTE;
	}

	public function setNOMCLIENTE($NOMCLIENTE){
		$this->NOMCLIENTE = $NOMCLIENTE;
	}

	public function getCIUDCLIENTE(){
		return $this->CIUDCLIENTE;
	}

	public function setCIUDCLIENTE($CIUDCLIENTE){
		$this->CIUDCLIENTE = $CIUDCLIENTE;
	}

	public function getTDCLIENTE(){
		return $this->TDCLIENTE;
	}

	public function setTDCLIENTE($TDCLIENTE){
		$this->TDCLIENTE = $TDCLIENTE;
	}

	public function getDCMTOCLIENTE(){
		return $this->DCMTOCLIENTE;
	}

	public function setDCMTOCLIENTE($DCMTOCLIENTE){
		$this->DCMTOCLIENTE = $DCMTOCLIENTE;
	}

	public function getEMAILCLIENTE(){
		return $this->EMAILCLIENTE;
	}

	public function setEMAILCLIENTE($EMAILCLIENTE){
		$this->EMAILCLIENTE = $EMAILCLIENTE;
	}

	public function getUSUARIOCLIENTE(){
		return $this->USUARIOCLIENTE;
	}

	public function setUSUARIOCLIENTE($USUARIOCLIENTE){
		$this->USUARIOCLIENTE = $USUARIOCLIENTE;
	}

	public function getCONTRASENACLIENTE(){
		return $this->CONTRASENACLIENTE;
	}

	public function setCONTRASENACLIENTE($CONTRASENACLIENTE){
		$this->CONTRASENACLIENTE = $CONTRASENACLIENTE;
	}
}
?>