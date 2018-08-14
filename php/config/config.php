<?php require '../../config/config.php';
if(isset($_COOKIE['iduser'],$_COOKIE['cry'])){
	$game = $_POST['game'];
	$filme = $_POST['filme'];
	$pin = $_POST['pin'];
	if(empty($_POST['game'])){
		echo ('Preencha o campo Jogo favorito <br>');
	}
	if(empty($_POST['filme'])){
		echo ('Preencha o campo Filme <br>');
	}
	if(empty($_POST['pin'])){
		echo ('Preencha o campo Pin Code <br>');	
	}
	$iduser = $_COOKIE['iduser'];
	$sql = "UPDATE user SET game= '$game' WHERE id='$iduser'";
	$sql = "UPDATE user SET filme= '$filme' WHERE id='$iduser'";
	$sql = "UPDATE user SET pincode= '$pin' WHERE id='$iduser'";
	$sql = "UPDATE user SET config= '1' WHERE id='$iduser'";

if ($conn->query($sql) === TRUE) {
	echo "Redirecionando";
 	echo '<script>location.href="/";</script>';
}
else{
	echo 'Ocorreu um erro!';
}

}

?>