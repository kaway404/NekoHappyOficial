<?php if(isset($template)){
	?>

<div class="profile_">
<div class="notice" style="top: 0;">
    <p>Perfil de <?php echo $user['usuario'];?></p>
</div>
<div class="cover">
<div class="avatar">
	<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
</div>

<style type="text/css">
	<?php
	if(isset($user['cover'])){?>
		.cover{
			background-image: url('/img/cover/<?php echo $user['cover'];?>') !important;
		}
	<?php } ?>
</style>

<?Php } else{
 	include '../404/index.php';
 } ?>