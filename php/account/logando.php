<?php 
require '../../config/config.php';

if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
    echo 'Você está logado';
}

else{

if(isset($_POST['email'])){
	$email = $_POST['email'];
	
	$password = sha1($_POST['senha']);
	

		$result_usuario = "SELECT * FROM user WHERE email = '$email' && password = '$password' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        if(isset($resultado)){
            setcookie("iduser", $resultado['id'], time() + (86400 * 30), "/");
            setcookie("cry", $resultado['cry'], time() + (86400 * 30), "/");
            echo 'Estamos redirecionando você';
            echo '<script>location.href="/";</script>';
        }
        else{
        	echo 'Email ou senha incorretos';
        	echo "<script>var email = document.getElementById('lemail');
    email.classList.add('uk-animation-shake');</script>";
     echo "<script>var senha = document.getElementById('lsenha');
    senha.classList.add('uk-animation-shake');</script>";
        }	
}
}
?>