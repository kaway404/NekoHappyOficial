<?php
// NekoHappy
// Feito por kaway404
// Feito por um unico membro

// ----------------------

// Configurações do site
$namesite = "NekoHappy";
$language = "pt";

// ----------------------

// Conexão com banco de dados

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "nekohappy";
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
if(!$conn){
        echo '';
}