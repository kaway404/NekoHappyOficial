<div style="color: #36465d !important;">
<?php
// NekoHappy
// Feito por kaway404
// Feito por um unico membro

// ----------------------

if(isset($_COOKIE['iduser']) ){
if(empty($_COOKIE['cry']) ){
    $iduser = $_COOKIE['iduser'];
    $result_usuariod = "SELECT * FROM user WHERE id = '$iduser' LIMIT 1";
    $resultado_usuariod = mysqli_query($conn, $result_usuariod);
    $userd = mysqli_fetch_assoc($resultado_usuariod);
}
}

if(isset($_COOKIE['verificar']) ){
    $verificardt = $_COOKIE['verificar'];
    $nani = $_COOKIE['nani'];
    $verificard = "SELECT * FROM user WHERE id = '$verificardt' && nani = '$nani' LIMIT 1";
    $verificards = mysqli_query($conn, $verificard );
    $userde = mysqli_fetch_assoc($verificards);
    if(isset($userde)){
        echo '';
    }
    else{
        setcookie("iduser", "", time()+7200);
        setcookie("cry", "", time()+7200);
        setcookie("passwordchange", "", time()+7200);
        setcookie("verificar", "", time()+7200);
        echo '<script>location.href="/login";</script>';
    }
}


if(isset($_COOKIE['iduser']) ){
if(empty($_COOKIE['cry']) ){
    $iduser = $_COOKIE['iduser'];
    $result_usuariod = "SELECT * FROM user WHERE id = '$iduser' LIMIT 1";
    $resultado_usuariod = mysqli_query($conn, $result_usuariod);
    $userd = mysqli_fetch_assoc($resultado_usuariod);
}
}

if(isset($_COOKIE['cry']) ){
if(empty($_COOKIE['iduser']) ){
    $cry = $_COOKIE['cry'];
    $result_usuarioc = "SELECT * FROM user WHERE cry = '$cry' LIMIT 1";
    $resultado_usuarioc = mysqli_query($conn, $result_usuarioc);
    $userc = mysqli_fetch_assoc($resultado_usuarioc);
}
}

if(isset($_COOKIE['iduser']) ){
if(empty($_COOKIE['cry']) ){
if(isset($_COOKIE['passwordchange']) ){
$crypass = $_COOKIE['passwordchange'];
    $passwordchanges = "SELECT * FROM passwordchange WHERE iduser = '$iduser' && cry = '$crypass' LIMIT 1";
    $passwordchangee = mysqli_query($conn, $passwordchanges);
    $passwordchange = mysqli_fetch_assoc($passwordchangee);

    if(isset($passwordchange)){
        echo '';
    }
    else{
        setcookie("iduser", "", time()+7200);
        setcookie("cry", "", time()+7200);
        setcookie("passwordchange", "", time()+7200);
        echo '<script>location.href="/login";</script>';
    }
}
}
}

// Configurações do usuario
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) ) ){

	$iduser = $_COOKIE['iduser'];
	$cry = $_COOKIE['cry'];
    $wtf = $_COOKIE['wtf'];
    $cool = $_COOKIE['cool'];
    $baby = $_COOKIE['baby'];
    $very = $_COOKIE['very'];

	$result_usuario = "SELECT * FROM user WHERE id = '$iduser' && cry = '$cry' and wtf = '$wtf' and cool = '$cool' and baby = '$baby' and very = '$very' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $user = mysqli_fetch_assoc($resultado_usuario);


    if(isset($user)){
    	echo
        '
        <div class="result_online"></div>
        <script>
        window.setInterval(function(){
            $.post( "/buzz", function( data ) {
              $( ".result_online" ).html( data );
            });
          }, 2000);
        </script>';
    }
    else{
    	setcookie("iduser", "", time()+7200);
     	setcookie("cry", "", time()+7200);
        setcookie("nani" , "", time()+7200);
        setcookie("wtf" , "", time()+7200);
        setcookie("cool" , "", time()+7200);
        setcookie("baby" , "", time()+7200);
        setcookie("very" , "", time()+7200);
    	echo '<script>location.href="/login";</script>';
    }
}
?>

</div>