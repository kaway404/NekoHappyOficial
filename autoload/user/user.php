<?php
// NekoHappy
// Feito por kaway404
// Feito por um unico membro

// ----------------------

if(isset($_COOKIE['cry']) ){
if(empty($_COOKIE['iduser']) ){
    $cry = $_COOKIE['cry'];
    $result_usuarioc = "SELECT * FROM user WHERE cry = '$cry' LIMIT 1";
    $resultado_usuarioc = mysqli_query($conn, $result_usuarioc);
    $userc = mysqli_fetch_assoc($resultado_usuarioc);
}
}

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