<?php if(isset($template)){?>
<?php if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){ ?>
<div class="headerta">
	<div class="align">
		<a href="/"><img class="logo" src="/assets/img/friends.png"/></a>
	<div class="boxcenter">
		<input class="busca" type="text" placeholder="Buscar amigos"/>
	</div>
	<div class="boxleft">
		<div class="okaysr">
		<a href="/profile/<?php echo $user['id'];?>">
		<img class="avatar" src="/img/user/<?php echo $user['avatar'];?>"/>
		</a>
		</div>
	</div>
	</div>
</div>
<?Php } ?>
<?Php }  else{ include './view/404/index.php';}?>