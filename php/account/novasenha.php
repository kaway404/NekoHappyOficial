<?php
require '../../config/config.php';
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['passwordchange']) )){
		$iduser = $_COOKIE['iduser'];
		$password = sha1($_POST['senha']);
		if(empty($_POST['senha'])){
			echo 'Insira uma senha';
		}
		else{
		$sql = "UPDATE user SET password= '$password' WHERE id='$iduser'";
		if ($conn->query($sql) === TRUE) {
			echo 'Redirecionando';
			setcookie("iduser" , "");
			setcookie("inisession" , "");
			setcookie("cry" , "");
			setcookie("passwordchange" , "");
			echo '<script>location.href="/login";</script>';
		}
	}
	}
?>