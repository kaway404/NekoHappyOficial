<?php require '../../config/config.php';
if(isset($_COOKIE['iduser'],$_COOKIE['cry'])){
$iduser = $_COOKIE['iduser'];
$sql = "UPDATE user SET tuturial= 1 WHERE id='$iduser'";
if ($conn->query($sql) === TRUE) {?>

<style type="text/css">
	body{
		overflow: auto !important;
	}
</style>

<?php } } ?>