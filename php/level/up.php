<?php ;
// Iniciar usuario
require '../../autoload/user/user.php';

if($user['exp'] == 9){
	$lvl = $user['lvl'] += 1;
	$iduser = $_COOKIE['iduser'];
	$up = "UPDATE user SET lvl= '$lvl' WHERE id='$iduser'";
	if ($conn->query($up) === TRUE) {?>

<script type="text/javascript">
	var level = <?php echo $lvl;?>;
	var upou ='<div class="vcup"><p>Você upou de level</p></div>';
	$("#lvl").html(level);
	$(".quemas").after(upou);
</script>

<?php
$expt = $user['exp'] - 9;
$expt = "UPDATE user SET exp= '$expt' WHERE id='$iduser'";
if ($conn->query($expt) === TRUE) {
	echo '';
}
?>

<?php } else{ echo 'ocorreu um erro';} }
else{
$exp = $user['exp'] += 1;
$expup = "UPDATE user SET exp= '$exp' WHERE id='$iduser'";
if ($conn->query($expup) === TRUE) {
	echo '';
}
}