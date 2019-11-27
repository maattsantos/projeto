<?php
class Conexao{
	private $servidor;
	private $usuario;
	private $senha;
	private $nomeBD;
	
	function __construct(){
		$servidor = 'localhost';
		$usuario = 'root';
		$senha = '';
		$nomeBD = 'contactmanagerbd';
		
		$conn = new mysqli($servidor, $usuario, $senha, $nomeBD);
		if($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);	
			echo "erro na conexão com Banco de Dados";
		} else {
			echo "Banco de Dados conectado";
			return $conn;
		}
	}		
}
?>