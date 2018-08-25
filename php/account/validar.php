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
        $nekohappy = sha1('nekhappy') . $n;
        $crya = $nekohappy . $n;
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
}
else{
$date = date('Y-m-d H:i:s');
$iduser = $_COOKIE['iduser'];
$tentativa = $conn->query("SELECT * FROM attempt_change_password WHERE iduser='" . $iduser . "'");
if($tentativa->num_rows > 3){
$exce = 1;
$resultenta = "SELECT * FROM attempt_change_password WHERE iduser='" . $iduser . "' and exce = '" . $exce . "'   LIMIT 1";
$resultentas = mysqli_query($conn, $resultenta);
$resultentar = mysqli_fetch_assoc($resultentas);

if(isset($resultentar)){
echo 'Você pode tentar novamente em ' . $resultentar['datet'];
if($date > $resultentar['datet']){
$remove = "DELETE FROM attempt_change_password WHERE iduser='$iduser' ";
if ($conn->query($remove) === TRUE) {
echo '';
}
}
}
else{
    $limite = date('Y-m-d H:i:s', strtotime('+10 min'));
    echo 'Tentativa esgotadas <br>';
    $sql7 = "INSERT INTO attempt_change_password (iduser, datet, exce)
            VALUES ('".$iduser."', '".$limite."', '".$exce."')";
if (mysqli_query($conn, $sql7)) {
    echo 'Tente novamente';
}
}
}

else{
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO attempt_change_password (iduser, datet)
            VALUES ('".$iduser."', '".$date."')";
 if (mysqli_query($conn, $sql)) {
     echo 'Pincode incorreto';
}  
}

}
}

}

}
?>