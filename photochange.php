<?php
require './config/config.php';
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
	if (isset($_FILES) && isset($_FILES['FilesPic'])){
		$n = sha1(rand (0, 10000000));
		$img = 'nekohappy_' . $n . sha1(preg_replace('/[^\w\._]+/', '', $_FILES['FilesPic']["name"])) . '.png';
		$iduser = $_COOKIE['iduser'];
		move_uploaded_file($_FILES['FilesPic']['tmp_name'], 'img/user/'. $img);
		echo '1';
		$sql = "UPDATE user SET avatar= '$img' WHERE id='$iduser'";
		if ($conn->query($sql) === TRUE) {
	    echo "Foto alterada";
	}
	else{
		echo 'erro';
	}
	}
}
	echo '0';