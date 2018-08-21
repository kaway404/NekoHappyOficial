<?php 
require '../../config/config.php';

if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
    echo 'Você está logado';
}

else{

if(isset($_POST['pincode'])){
    if(empty($_POST['pincode'])){
        echo 'Preencha o pincode';
    }
    else{
    $iduser = $_COOKIE['verificar'];
	$pincode = $_POST['pincode'];
		$result_usuario = "SELECT * FROM user WHERE id = '$iduser' and pincode = '$pincode' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        if(isset($resultado)){
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
        }
        else{
        	echo 'Pincode incorreto';
        }	
}
}
}
?>