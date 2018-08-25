<?php
// NekoHappy
// Feito por kaway404
// Feito por um unico membro

// ----------------------

// Configurações do site
$namesite = "NekoHappy";
$language = "pt";
date_default_timezone_set('America/Sao_Paulo');

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