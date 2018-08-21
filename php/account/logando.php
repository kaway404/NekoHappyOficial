<?php 
require '../../config/config.php';

if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
    echo 'Você está logado';
}

else{

if(isset($_POST['email'])){
    $ip=$_SERVER['REMOTE_ADDR'];
	$email = $_POST['email'];
	
	$password = sha1($_POST['senha']);

		$result_usuario = "SELECT * FROM user WHERE email = '$email' && password = '$password' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
    if(isset($resultado)){
    $verificarip = "SELECT * FROM user WHERE email = '$email' LIMIT 1";
    $verificarip2 = mysqli_query($conn, $verificarip);
    $userip = mysqli_fetch_assoc($verificarip2);

    if($userip['ip'] <> $ip){
      $busca  = "SELECT id FROM user WHERE email = '$email' && password = '$password' LIMIT 1";
      $identificacao = mysqli_query($conn, $busca);
      $retorno = mysqli_fetch_assoc($identificacao);
      $verificar = $retorno['id'];
      $cryed = $userip['nani'];
      setcookie("verificar", $verificar);
      setcookie("nani", $cryed);
      echo 'Você iniciou em um novo dispositivo';
      echo '<script>location.href="/checksession";</script>';
  }
  else{
    $iduser = $resultado['id'];
    $ip=$_SERVER['REMOTE_ADDR'];
            $sql = "UPDATE user SET ip= '$ip' WHERE id='$iduser'";
            if ($conn->query($sql) === TRUE) {
            setcookie("iduser", $resultado['id'], time() + (86400 * 30), "/");
            setcookie("cry", $resultado['cry'], time() + (86400 * 30), "/");
            setcookie("wtf", $resultado['wtf'], time() + (86400 * 30), "/");
            setcookie("cool", $resultado['cool'], time() + (86400 * 30), "/");
            setcookie("baby", $resultado['baby'], time() + (86400 * 30), "/");
            setcookie("very", $resultado['very'], time() + (86400 * 30), "/");
            setcookie("verificar" , "");
            echo '<script>location.href="/";</script>';
        }
            echo '<script>location.href="/";</script>';
}
        }
        else{
        	echo 'Email ou senha incorretos';
        }	
}
}
?>