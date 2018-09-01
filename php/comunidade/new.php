<?php
require '../../config/config.php';

if(isset($_COOKIE['iduser'],$_COOKIE['cry'])){
	$nome = $_POST['nome'];
	$sobre = $_POST['sobre'];
	$iduser = $_COOKIE['iduser'];
	$sql = "INSERT INTO comunidade (nome, sobre, iduser,)
			VALUES ('".$nome."', '".$sobre."', '".$iduser."'')";
}
else{
	echo 'Ocorreu um erro';
}