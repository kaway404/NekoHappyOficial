<?php if(isset($template)){
?>
<?php
require './autoload/user/stranger.php';
if(isset($stranger)){
	?>


<?php
$status = $stranger['status'];
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
    <p>Perfil de <?php echo $stranger['usuario'];?></p>
</div>
<div class="cover">
<div class="avatar">
	<div class="online"><div uk-tooltip="<?php if($statusatual == "1"){ echo 'Usuario online';}else{ echo 'Usuario Offline';} ?>" class="verificar"></div></div>
	<img src="/img/user/<?php echo $stranger['avatar'];?>"/>
	<p class="myrank" style="width: auto; top: -40px !important;"><span id="lvl">Level <?php echo $stranger['lvl'];?></span></p>
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
	<div class="tags">
<div class="uk-position-relative uk-visible-toggle uk-light" uk-slider id="slidertag">
<ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
<?php 
if($stranger['admin'] == 1){
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
$quem = $stranger['id'];
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
<li><div class="tag" id="tag<?php echo $tagavss["tipo"];?>"></div><div class="uk-position-center uk-panel"></div></li>

<style type="text/css">
	#tag<?php echo $tagavss["tipo"];?>{
	background-image: url('/assets/img/tags/<?php echo $tagavss['img'];?>');
	}
</style>

<?php } }?>
</ul>
  <a class="haha uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="haha uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
</div>
	</div>
</div>

<div class="left_info">
<h1>Informações</h1>
<p>Filme/Série/Anime favorito : <?php echo $stranger['movie'];?></p>
<p>Jogo favorito : <?php echo $stranger['game'];?></p>
<p><?php
$meuanime = $stranger['anime_favorito'];
$anim = "SELECT * FROM anime WHERE id = '$meuanime' ORDER BY id ASC LIMIT 1";
$anime = mysqli_query($conn, $anim);
$animed = mysqli_fetch_assoc($anime);
if(isset($animed)){
	echo 'Anime que gosto: ';
}
foreach ($anime as $anime => $animes) {?>
 <a href="/anime/<?php echo $animes['id'];?>"><?php echo $animes['slug']; } ?></a></p>
</div>

<div class="right_info">
<?php
//Feed
echo '<div style="position: relative; left: 0; top: -20px;">';
require './view/profile/feeds.php';
echo '</div>';
?>
</div>

</div>

<style type="text/css">
	<?php
	if($stranger['cover'] <> ""){?>
		.cover{
			background-image: url('/img/cover/<?php echo $stranger['cover'];?>') !important;
		}
	<?php } ?>
	<?php
	if($stranger['background'] <> ""){?>
		.overtt{
			background-image: url('/img/background/<?php echo $stranger['background'];?>') !important;
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

<?php } else{ ?>
<div class="profile_">
<div class="notice" style="top: 0;">
    <p>Este perfil não existe. Talvez essa pessoa te bloqueiou.</p>
</div>
</div>
<?php } ?>
<?php } else{
 	include '../404/index.php';
 } ?>