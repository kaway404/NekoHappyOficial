<?php if(isset($template)){
	?>

<?php
$status = $user['status'];
$statusatual = null;

if($status >= $dataAtual){
	$statusatual = "1";
}
else{
	$statusatual = "0";
}
?>

<div class="profile_">
<div class="notice" style="top: 0;">
    <p>Perfil de <?php echo $user['usuario'];?></p>
</div>
<div class="cover">
<div class="avatar">
	<div class="online"><div uk-tooltip="<?php if($statusatual == "1"){ echo 'Usuario online';}else{ echo 'Usuario Offline';} ?>" class="verificar"></div></div>
	<img src="/img/user/<?php echo $user['avatar'];?>"/>
	<p class="myrank" style="width: auto; top: -40px !important;"><span id="lvl">Level <?php echo $user['lvl'];?></span></p>
</div>
</div>

<style type="text/css">
<?php if($statusatual == "1"){?>
	.verificar{
		background: #8dbd4e;
		height: 100%;
		width: 100%;
	}
<?php } ?>
<?php if($statusatual == "0"){?>
	.verificar{
		background: #ce2525;
		height: 100%;
		width: 100%;
	}
<?php } ?>
</style>

<div class="tab">
<div class="uk-position-relative uk-visible-toggle uk-light" uk-slider id="slidertag">
<ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
<?php 
if($user['admin'] == 1){
?>
<li>
<div class="tag" id="tagmembro"><p>Administrador</p></div>
<div class="uk-position-center uk-panel"></div>
</li>

<style type="text/css">
	#tagmembro{
	background-image: url('/assets/img/tags/admin.jpg');
	}
</style>
<?php } else{?>
<li>
<div class="tag" id="tagmembro"><p>Membro</p></div>
<div class="uk-position-center uk-panel"></div>
</li>

<style type="text/css">
	#tagmembro{
	background-image: url('/assets/img/tags/membro.jpg');
	}
</style>
<?php } ?>

<?php
$quem = $user['id'];
$tagab = "SELECT * FROM usertag WHERE iduser = $quem";
$taga = mysqli_query($conn, $tagab);
$tag = mysqli_fetch_assoc($taga);
foreach ($taga as $taga => $tagas) {
?>
<?php
$tag = $tagas['tipo'];
$tagav = "SELECT * FROM tag WHERE id and tipo = '$tag' ORDER BY id";
$tagavs = mysqli_query($conn, $tagav);
$tagavd = mysqli_fetch_assoc($tagavs);
foreach ($tagavs as $tagavs => $tagavss) {
?>
<li><div class="tag" id="tag<?php echo $tagavss["text"];?>"></div><div class="uk-position-center uk-panel"></div></li>

<style type="text/css">
	#tag<?php echo $tagavss["text"];?>{
	background-image: url('/assets/img/tags/<?php echo $tagavss['img'];?>');
	}
</style>

<?php } }?>
</ul>
  <a class="haha uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="haha uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
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