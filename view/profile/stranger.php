<?php if(isset($template)){
require './autoload/user/stranger.php'
?>
<?php
if(isset($stranger)){?>
<div class="profile_">
<div class="notice" style="top: 0;">
    <p>Perfil de <?php echo $stranger['usuario'];?></p>
</div>
<div class="cover">
<div class="avatar">
	<img src="/img/user/<?php echo $stranger['avatar'];?>"/>
</div>
</div>
<div class="tab">
	
</div>

<div class="left_info">
<h1>Informações</h1>
<p>Filme/Série/Anime favorito : <?php echo $stranger['movie'];?></p>
<p>Jogo favorito : <?php echo $stranger['game'];?></p>
<p>Cargo : <?php if($stranger['admin'] == 1){ echo 'Administrador';} else{ echo 'Membro';}?></p>
</div>

<div class="right_info">

</div>

</div>

<div class="overtt"><div class="ok"></div></div>

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