<?php
require_once 'Contato.php';
class Endereco{
	private $logradouro;
	private $numero;
	private $complemento;
	private $bairro;
	private $cidade;
	private $uf;
	private $cep;
	
	//getters
	public function getLogradouro(){
		return $this->logradouro;		
	}
	public function getNumero(){
		return $this->numero;		
	}
	public function getcomplemento(){
		return $this->complemento;		
	}
	public function getBairro(){
		return $this->bairro;		
	}
	public function getCidade(){
		return $this->cidade;		
	}
	public function getUf(){
		return $this->uf;		
	}
	public function getCep(){
		return $this->cep;		
	}
	
	
	//setters
	public function setLogradouro(String $logradouro){
		$this->logradouro = $logradouro;
	}
	public function setNumero(String $numero){
		$this->numero = $numero;
	}
	public function setComplemento(String $complemento){
		$this->complemento = $complemento;
	}
	public function setBairro(String $bairro){
		$this->bairro = $bairro;
	}
	public function setCidade(String $cidade){
		$this->cidade = $cidade;
	}
	public function setUf(String $uf){
		$this->uf = $uf;
	}
	public function setCep(String $cep){
		$this->cep = $cep;
	}
	
}