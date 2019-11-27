<?php

require "Endereco.php";

class Contato{
    private $nome;
    private $telefone;
    private $email;
    private $endereco;

    function getNome(){
        return this->$nome;
    }
    function getTelefone(){
        return this->$telefone;
    }
    function getEmail(){
        return this->$email;
    }
    function getEndereco(){
        return this->$endereco;
    }

    //setters
    function setNome($nome){
        this->$nome = $nome;
    }
    function setTelefone($telefone){
        this->$telefone = $telefone;
    }
    function setEndereco($endereco){
        this->$endereco = $endereco;
    }
}