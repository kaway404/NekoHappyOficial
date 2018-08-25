<?php require '../../config/config.php';
if(empty($_COOKIE['iduser']) && (empty($_COOKIE['cry']) ) ){
	echo '';
}
else{
$iduser = $_COOKIE['iduser'];
$cry = $_COOKIE['cry'];
$wtf = $_COOKIE['wtf'];
$cool = $_COOKIE['cool'];
$baby = $_COOKIE['baby'];
$very = $_COOKIE['very'];
$result_usuario = "SELECT * FROM user WHERE id = '$iduser' && cry = '$cry' and wtf = '$wtf' and cool = '$cool' and baby = '$baby' and very = '$very' LIMIT 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$user = mysqli_fetch_assoc($resultado_usuario);

if(empty($user)){
    	echo '';
 }
else{
if(empty($_POST['title'])){
		echo '';
	}
	if(empty($_POST['texto'])){
		echo '';
	}
	else{
		$title = $_POST['title'];
		$texto = $_POST['texto'];
		$cry = sha1(rand (0, 100000000));
		$cryi = sha1($title . $texto) . $cry;
		$cryin = $cry . $cry;
		$crying = sha1($cryin);
		$iduser = $user['id'];
		$sql = "INSERT INTO postagem (cry, title, texto, iduser)
			VALUES ('".$crying."', '".$title."', '".$texto."', '".$iduser."')";
if (mysqli_query($conn, $sql)) {?>

<div class="post">  
<p style="color: #151515 !important; top: 10px; position: relative; left: 10px;word-wrap: break-word;">
	<a href="/profile/<?php echo $user['id'];?>""><?php echo $user['usuario'];?></a>
	</p>
<h1 style="color: #151515 !important; top: -20px; position: relative; left: 10px; font-size: 28px;word-wrap: break-word;">
	<?php echo $title;?>
	</h1>
<span style="color: #151515 !important; top: -35px; position: relative; left: 10px; font-size: 18px;word-wrap: break-word;">
	<?php echo $texto;?>
	</span>
<div class="postaaa" style="left: -100px; position: absolute;">
<div class="avatar" style="top: -130px; position: absolute;">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>

<?php } } }  }?>

