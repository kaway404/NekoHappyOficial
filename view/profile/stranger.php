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
</div>
<?php } else{ ?>
<div class="profile_">
<div class="notice" style="top: 0;">
    <p>Este perfil não existe.</p>
</div>
</div>
<?php } ?>
<?php } else{
 	include '../404/index.php';
 } ?>