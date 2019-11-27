<?php

require 'Conexao.php';

class ContatoDao{
	
	$contato = new Contato();
	$conn =  new Conexao();
	static $id;
	
	function adicionaContato(){
		$sql = "INSERT INTO contatos 
		(id, nome, telefone, email, logradouro, numero, complemento, bairro, cidade, uf, cep)
		VALUES ("$id", "
		$contato->getNome", "
		$contato->getTelefone", "
		$contato->getEmail", "
		$contato->$endereco->getLogradouro", "
		$contato->$endereco->getNumero", "
		$contato->$endereco->getComplemento", "
		$contato->$endereco->getBairro", "
		$contato->$endereco->getCidade", "
		$contato->$endereco->getUf", "
		$contato->$endereco->getCep")";

	if (mysqli_query($conn, $sql)) {
		echo "Dados adicionados";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
		
		
	}
}




















/*$servername = "localhost";


$sql = "INSERT INTO contatos (id, nome, telefone, email)
VALUES (1, 'john', '11112222', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);*/



?>