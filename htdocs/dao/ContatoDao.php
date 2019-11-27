<?php

class ContatoDao{
    
function adicionaContato($contato){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contactmanagerbd";
    //Criando Conexão
    $conn = new mysqli($servername, $username, $password, $dbname);
    //Checando conexão
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO contato 
    VALUES (" . $contato::$id . ", '"
    . $contato->getNome() . "', '"
    . $contato->getTelefone() . "', '"
    . $contato->getEmail() . "', '"
    . $contato->getLogradouro() . "', '"
    . $contato->getNumero() . "', '"
    . $contato->getComplemento() . "', '"
    . $contato->getBairro() . "', '"
    . $contato->getCidade() . "', '"
    . $contato->getUf() . "', '"
    . $contato->getCep() . "')";

    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        return false;
    }
    
    $conn->close();
}
}