<?php
// NekoHappy
// Feito por kaway404
// Feito por um unico membro

// ----------------------

require './config/config.php';

// Configurações do usuario
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
	$iduser = $_COOKIE['iduser'];
	$cry = $_COOKIE['cry'];

	$result_usuario = "SELECT * FROM user WHERE id = '$iduser' && cry = '$cry' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $user = mysqli_fetch_assoc($resultado_usuario);

    if(isset($user)){
    	echo '';
    }
    else{
    	setcookie("iduser", "", time()+7200);
     	setcookie("cry", "", time()+7200);
    	echo '<script>location.href="/login";</script>';
    }
}