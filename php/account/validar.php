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
    $iduser = $_COOKIE['iduser'];
	$pincode = $_POST['pincode'];
		$result_usuario = "SELECT * FROM user WHERE id = '$iduser' and pincode = '$pincode' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        if(isset($resultado)){
        $n = sha1(rand (0, 10000000));
        $crya = $n;
        $sql = "INSERT INTO passwordchange (iduser, cry)
            VALUES ('".$iduser."', '".$crya."')";
        if (mysqli_query($conn, $sql)) {
        $result_usuarioe = "SELECT * FROM passwordchange WHERE iduser = '$iduser' and cry = '$crya' LIMIT 1";
        $resultado_usuarioe = mysqli_query($conn, $result_usuarioe);
        $resultadoe = mysqli_fetch_assoc($resultado_usuarioe);
        if(isset($resultadoe)){
        setcookie("passwordchange", $resultadoe['cry'], time() + (86400 * 30), "/");
        echo '<script>location.href="/changepassword";</script>';
        }
        }
        else{
        	echo 'Pincode incorreto';
        }	
}
}
}
}
?>