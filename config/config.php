<?php
// NekoHappy
// Feito por kaway404
// Feito por um unico membro

// ----------------------

// Configurações do site
$namesite = "NekoHappy";
$language = "pt";
date_default_timezone_set('America/Sao_Paulo');
$dataAtual = date('d/m/Y H:i:s');

// ----------------------

// Conexão com banco de dados

$servidor = "sql10.freemysqlhosting.net";
$usuario = "sql10254218";
$senha = "tD77bquKUT";
$dbname = "sql10254218";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
if(!$conn){
        echo '';
}