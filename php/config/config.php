<?php require '../../config/config.php';
if(isset($_COOKIE['iduser'],$_COOKIE['cry'])){
	$pin = $_POST['pin'];
	$game = $_POST['game'];
	$filme = $_POST['filme'];
	$anime = $_POST['anime'];
	if(empty($_POST['pin'])){
		echo ('Preencha o campo Pin Code <br>');	
	}
	else{
	$iduser = $_COOKIE['iduser'];
	$sql = "UPDATE user SET pincode= '$pin' WHERE id='$iduser'";
	$sql2 = "UPDATE user SET config= '1' WHERE id='$iduser'";
	$sql3 = "UPDATE user SET game= '$game' WHERE id='$iduser'";
	$sql4 = "UPDATE user SET movie= '$filme' WHERE id='$iduser'";
	$sql5 = "UPDATE user SET anime_favorito= '$anime' WHERE id='$iduser'";

if ($conn->query($sql) === TRUE) {
	echo "Redirecionando";
 	echo '<script>location.href="/";</script>';
}
else{
	echo 'Ocorreu um erro!';
}

if ($conn->query($sql2) === TRUE) {
	echo "";
}
else{
	echo 'Ocorreu um erro!';
}

if ($conn->query($sql3) === TRUE) {
	echo "";
}
else{
	echo 'Ocorreu um erro!';
}

if ($conn->query($sql4) === TRUE) {
	echo "";
}
else{
	echo 'Ocorreu um erro!';
}

if ($conn->query($sql5) === TRUE) {
	echo "";
}
else{
	echo 'Ocorreu um erro!';
}

}

}

?>