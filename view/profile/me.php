<?php if(isset($template)){
	?>
<div class="profile_">
<div class="notice" style="top: 0;">
    <p>Perfil de <?php echo $user['usuario'];?></p>
</div>
<div class="cover">
<div class="avatar">
	<img src="/img/user/<?php echo $user['avatar'];?>"/>
	<p class="myrank" style="width: auto; top: -40px !important;"><span id="lvl">Level <?php echo $user['lvl'];?></span></p>
</div>
</div>
<div class="tab">
	<div class="tags">

<?php 
if($user['admin'] == 1){
?>
<div class="tag" id="tagmembro"><p>Administrador</p></div>

<style type="text/css">
	#tagmembro{
	background-image: url('/assets/img/tags/admin.jpg');
	}
</style>
<?php } else{?>
<div class="tag" id="tagmembro"><p>Membro</p></div>

<style type="text/css">
	#tagmembro{
	background-image: url('/assets/img/tags/membro.jpg');
	}
</style>
<?php } ?>

<?php
$iduser = $user['id'];
$tagav = "SELECT * FROM tag WHERE id ORDER BY id DESC";
$tagavs = mysqli_query($conn, $tagav);
$tagavd = mysqli_fetch_assoc($tagavs);
foreach ($tagavs as $tagavs => $tagavss) {
?>

<?php
$quem = $user['id'];
$tagab = "SELECT * FROM usertag WHERE iduser = $quem";
$taga = mysqli_query($conn, $tagab);
$tag = mysqli_fetch_assoc($taga);
foreach ($taga as $taga => $tagas) {
?>
		<div class="tag" id="tag<?php echo $tagas["tipo"];?>"></div>

<style type="text/css">
	#tag<?php echo $tagas["tipo"];?>{
	background-image: url('/assets/img/tags/<?php echo $tagavss['img'];?>');
	}
</style>

<?php } }?>
	</div>
</div>


<div class="left_info">
<h1>Informações</h1>
<p>Filme/Série/Anime favorito : <?php echo $user['movie'];?></p>
<p>Jogo favorito : <?php echo $user['game'];?></p>
<p>Cargo : <?php if($user['admin'] == 1){ echo 'Administrador';} else{ echo 'Membro';}?></p>
</div>

<div class="right_info">
<?php
// Postagem
require './view/dashboard/post/pnovo.php';
?>
</div>

</div>

<div class="overtt"><div class="ok"></div></div>

<style type="text/css">
	<?php
	if($user['cover'] <> ""){?>
		.cover{
			background-image: url('/img/cover/<?php echo $user['cover'];?>') !important;
		}
	<?php } ?>
	<?php
	if($user['background'] <> ""){?>
		.overtt{
			background-image: url('/img/background/<?php echo $user['background'];?>') !important;
			position: fixed;
			top: 0;
			left: 0;
			background-size: cover;
			width: 100%;
			height: 100%;
		}

		.ok{
			position: fixed;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			background: rgba(0,0,0,.50);
		}
	<?php } ?>
</style>

<?Php } else{
 	include '../404/index.php';
 } ?>