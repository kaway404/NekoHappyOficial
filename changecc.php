<?php
require './config/config.php';
require './autoload/page/id.php';
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
$iduser = $_COOKIE['iduser']; 
if($iduser == $comunidade['iduser']){
$comunidadeok = $_GET['id'];
	$f_type = $_FILES['FilesCov']['type'];
    $FotoTipo = $f_type;
    if($FotoTipo == "image/pjpeg" or $FotoTipo == "image/jpg" or $FotoTipo == "image/jpeg" or $FotoTipo == "image/png" or $FotoTipo == "image/PNG" or $FotoTipo == "image/gif") {
	if (isset($_FILES) && isset($_FILES['FilesCov'])){
		$n = sha1(rand (0, 10000000));
		$img = 'nekohappy_' . $n . sha1(preg_replace('/[^\w\._]+/', '', $_FILES['FilesCov']["name"])) . '.png';
		move_uploaded_file($_FILES['FilesCov']['tmp_name'], 'img/comunidade/cover/'. $img);
		echo '1';
		$sql = "UPDATE comunidade SET cover= '$img' WHERE id='$comunidadeok'";
		if ($conn->query($sql) === TRUE) {
	    echo "Foto alterada";
	}
	else{
		echo 'erro';
	}
	}
}
}
}
	echo $comunidadeok;