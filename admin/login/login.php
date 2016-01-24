 <?php

class Login {

	public function __construct(){
		session_start();
	}

	public function initLogged(){
		$_SESSION['restrito']['logged'] = true;

		return $this;
	}
	public function notLogged(){
		$_SESSION['restrito']['logged'] = false;
		return $this;
	}
	public function setName( $name ){
		$_SESSION['restrito']['name'] = $name;

		return $this;
	}
	public function setEstado( $estado ){
		$_SESSION['restrito']['estado'] = $estado;

		return $this;
	}
	public function setCidade( $cidade ){
		$_SESSION['restrito']['cidade'] = $cidade;

		return $this;
	}
	public function setCep( $cep ){
		$_SESSION['restrito']['cep'] = $cep;

		return $this;
	}
	public function setTelefone( $telefone ){
		$_SESSION['restrito']['telefone'] = $telefone;

		return $this;
	}

	public function getName(){
		return $_SESSION['restrito']['name'];
	}
	public function getEstado(){
		return $_SESSION['restrito']['estado'];
	}
	public function getCidade(){
		return $_SESSION['restrito']['cidade'];
	}
	public function getCep(){
		return $_SESSION['restrito']['cep'];
	}
	public function getTelefone(){
		return $_SESSION['restrito']['telefone'];
	}

	public function isLogged(){
		if( $_SESSION['restrito']['logged'] ){
			return true;
		}

		return false;
	}

	public function logout(){
		unset($_SESSION['restrito']);

		return $this;
	}

}
