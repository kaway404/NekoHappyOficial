<?php 
require '../../config/config.php';

if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
    echo 'Você está logado';
}

else{

if(isset($_POST['email'])){
	$email = $_POST['email'];
		$result_usuario = "SELECT * FROM user WHERE email = '$email' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        if(isset($resultado)){
            setcookie("iduser", $resultado['id'], time() + (86400 * 30), "/");
            echo 'Estamos redirecionando você';
            echo '<script>location.href="/changepassword";</script>';
        }
        else{
        	echo 'Esse email não existe';
        }	
}
}
?>