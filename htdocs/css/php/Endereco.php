<?php

class Endereco{
    private $logradouro;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;

    //getters
    function getLogradouro(){
        return this->$logradouro;
    }
    function getNumero(){
        return this->$numero;
    }
    function getComplemento(){
        return this->$complemento;
    }
    function getBairro(){
        return this->$bairro;
    }
    function getCidade(){
        return this->$cidade;
    }
    function getUf(){
        return this->$uf;
    }
    function getCep(){
        return this->$cep;
    }

    //setters
    function setLogradouro($logradouro){
        this->$logradouro = $logradouro;
    }
    function setNumero($numero){
        this->$numero = $numero;
    }
    function setComplemento($complemento){
        this->$complemento = $complemento;
    }
    function setBairro($bairro){
        this->$bairro = $bairro;
    }
    function setCidade($cidade){
        this->$cidade = $cidade;
    }
    function setUf($uf){
        this->$uf = $uf;
    }
    function setCep($cep){
        this->$cep = $cep;
    }



}