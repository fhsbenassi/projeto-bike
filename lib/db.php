<?php 


class Banco{

	//host
	private $host = 'localhost';
	//usuario
	private $usuario = 'root';
	//senha
	private $senha = '';
	//banco de dados
	private $database = 'projetobike';

	protected function conectar(){
		//criar a conexao
		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

		//ajustar o charset de comunicação entre a aplicação e o banco de dados
		mysqli_set_charset($con, 'utf8');

		//verficar se houve erro de conexão
		if(mysqli_connect_errno()){
			echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();	
		}

		return $con;
	}

}


/*
define('BD_SERVIDOR','localhost');
define('BD_USUARIO','root');
define('BD_SENHA','');
define('BD_BANCO','livraria');

class Banco{

	protected $mysqli;

	public function __construct(){
		$this->conexao();
	}

	protected function conexao(){
		$this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
	}

}

public function incluirContratante($nome){
	$stmt = $this->mysqli->prepare("INSERT INTO usuario (`nome`) VALUES (?)");
	$stmt->bind_param("s",$nome);
	if( $stmt->execute() == TRUE){
		return true ;
	}else{
		return false;
	}

}

*/