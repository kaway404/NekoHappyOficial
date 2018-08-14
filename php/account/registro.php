<?php require '../../config/config.php';
if(isset($_COOKIE['iduser'],$_COOKIE['cry'])){
	echo 'Você está logado';exit();
}
if(isset($_POST['email'])){
	$email = $_POST['email'];
	$admin = "0";
	$password = $_POST['senha'];
	$user = $_POST['user'];
	$passwordcry = sha1($_POST['senha']);
	$crying = "nekohappy_" . sha1($_POST['email']);
	$avatar = 'default.jpg';
	if(empty($_POST['email'])){
		echo ('Preencha o campo email <br>');
		$status_email = "0";
	}
	if(empty($_POST['senha'])){
		echo ('Preencha o campo senha <br>');
		$status_senha = "0";
	}
	if(empty($_POST['user'])){
		echo ('Preencha o campo usuario <br>');	
		$status_user = "0";
	}
	// Se algum campo forem vazios, cencela
	if (@$status_email == "0" OR @$status_senha == "0" OR @$status_favorite == "0" OR @$status_user == "0") {
		exit();
	}
	if(!empty($_POST['email'])){
		$result_usuario = "SELECT * FROM user WHERE email = '$email' LIMIT 1";
	    $resultado_usuario = mysqli_query($conn, $result_usuario);
	    $resultado = mysqli_fetch_assoc($resultado_usuario);
	    if(isset($resultado)){
			echo 'Esse email ja existe<br>';exit();
		}

	    $result_usuariod = "SELECT * FROM user WHERE usuario = '$user' LIMIT 1";
	    $resultado_usuariod = mysqli_query($conn, $result_usuariod);
		$resultadod = mysqli_fetch_assoc($resultado_usuariod);
		if(isset($resultadod)){
		    echo 'Esse usuario ja existe<br>';
		}
		else{
		

		$sql = "INSERT INTO user (cry, email, password, usuario,admin, avatar)
			VALUES ('".$crying."', '".$email."', '".$passwordcry."', '".$user."', '".$admin."', '".$avatar."')";
		if (mysqli_query($conn, $sql)) {
		    echo "Cadastrado com sucesso<br>";
			$result_usuario = "SELECT * FROM user WHERE email = '$email' && password = '$passwordcry' LIMIT 1";
		    $resultado_usuario = mysqli_query($conn, $result_usuario);
		    $resultado = mysqli_fetch_assoc($resultado_usuario);
		    if(isset($resultado)){
		        setcookie("iduser", $resultado['id'], time() + (86400 * 30), "/");
	            setcookie("cry", $resultado['cry'], time() + (86400 * 30), "/");
	            echo 'Estamos redirecionando você <br>';
	            echo '<script>location.href="/";</script>';
	        }
		}else{
		    echo "Error: " .$sql. "<br>" . mysqli_error($conn);
		}
	}
}
}

?>