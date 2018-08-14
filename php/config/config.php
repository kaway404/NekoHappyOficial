<?php require '../../config/config.php';
if(isset($_COOKIE['iduser'],$_COOKIE['cry'])){
	$pin = $_POST['pin'];
	if(empty($_POST['pin'])){
		echo ('Preencha o campo Pin Code <br>');	
	}
	else{
	$iduser = $_COOKIE['iduser'];
	$sql = "UPDATE user SET pincode= '$pin' WHERE id='$iduser'";
	$sql2 = "UPDATE user SET config= '1' WHERE id='$iduser'";

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
}

}

?>