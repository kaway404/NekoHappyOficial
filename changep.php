<?php
require './config/config.php';
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
	$f_type = $_FILES['FilesCov']['type'];
    $FotoTipo = $f_type;
    if($FotoTipo == "image/pjpeg" or $FotoTipo == "image/jpg" or $FotoTipo == "image/jpeg" or $FotoTipo == "image/png" or $FotoTipo == "image/PNG" or $FotoTipo == "image/gif") {
	if (isset($_FILES) && isset($_FILES['FilesCov'])){
		$n = sha1(rand (0, 10000000));
		$img = 'nekohappy_' . $n . sha1(preg_replace('/[^\w\._]+/', '', $_FILES['FilesCov']["name"])) . '.png';
		$iduser = $_COOKIE['iduser'];
		move_uploaded_file($_FILES['FilesCov']['tmp_name'], 'img/cover/'. $img);
		echo '1';
		$sql = "UPDATE user SET cover= '$img' WHERE id='$iduser'";
		if ($conn->query($sql) === TRUE) {
	    echo "Foto alterada";
	}
	else{
		echo 'erro';
	}
	}
}
}
	echo '0';