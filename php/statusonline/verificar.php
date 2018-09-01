<?php
require '../../config/config.php';
$iduser = $_COOKIE['iduser'];
$dateagora = date('d/m/Y H:i:s', strtotime('+30 sec'));
$sql = "UPDATE user SET status= '$dateagora' WHERE id='$iduser'";

if ($conn->query($sql) === TRUE) {
	echo '<p style="display: none">Online</p>';
}
else{
	echo '<p style="display: none">Erro</p>';
}