<?php require '../../config/config.php';
if(isset($_COOKIE['iduser'],$_COOKIE['cry'])){
$iduser = $_COOKIE['iduser'];
$finish = $_POST['finish;'];
$sql = "UPDATE user SET tuturial= '$finish' WHERE id='$iduser'";
if ($conn->query($sql) === TRUE) {?>

<style type="text/css">
	body{
		overflow: auto !important;
	}
</style>

<?php } } ?>