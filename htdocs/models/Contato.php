<?php
class Contato{

	private $nome;
	private $telefone;
	private $email;
	private $logradouro;
	private $numero;
	private $complemento;
	private $bairro;
	private $cidade;
	private $uf;
	private $cep;
	public static $id = 0;

	//construtor
	function __construct(){
		Contato::$id += 1;
	}
	
	//getters
	public function getNome(){
		return $this->nome;		
	}
	public function getTelefone(){
		return $this->telefone;		
	}
	public function getEmail(){
		return $this->email;		
	}
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
	public function setNome(String $nome){
		$this->nome = $nome;	
	}
	public function setTelefone(String $telefone){
		$this->telefone = $telefone;		
	}
	public function setEmail(String $email){
		$this->email = $email;		
	}
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