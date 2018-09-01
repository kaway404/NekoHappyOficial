<?php
require '../../config/config.php';

if(isset($_COOKIE['iduser'],$_COOKIE['cry'])){
	$nome = $_POST['nome'];
	$sobre = $_POST['sobre'];
	$iduser = $_COOKIE['iduser'];

	if(empty($_POST['nome'])){
		echo ('Preencha o campo nome <br>');
	}
	if(empty($_POST['sobre'])){
		echo ('Preencha o campo sobre <br>');	
	}
	else{

	$sql = "INSERT INTO comunidade (iduser, nome, sobre)
			VALUES ('".$iduser."', '".$nome ."', '".$sobre."')";
	if (mysqli_query($conn, $sql)) {
		$result_comunidade = "SELECT * FROM comunidade WHERE nome = '$nome' && sobre = '$sobre' && iduser = '$iduser' LIMIT 1";
		$resulto_comunidade = mysqli_query($conn, $result_comunidade);
		$resultado = mysqli_fetch_assoc($resulto_comunidade);
		if(isset($resultado)){
		$idcomunidade = $resultado['id'];
		echo '<script>location.href="/comunidade/'.$idcomunidade.'";</script>';
		}
	}
	else{
		echo 'Ocorreu um erro';
	}
}	
}
else{
	echo 'Ocorreu um erro';
}