<?php if(isset($template)){?>
<?php if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){ ?>
<div class="headerta">
	<div class="align">
		<a href="/"><img class="logo" src="/assets/img/friends.png"/></a>
	<div class="boxcenter">
		<input class="busca" type="text" placeholder="Buscar amigos"/>
	</div>
	<div class="boxleft">
		<div class="okaysr" uk-tooltip="Seu level">
		<a href="/profile/<?php echo $user['id'];?>">
		<img class="avatar" src="/img/user/<?php echo $user['avatar'];?>"/>
		<p class="myrank"><span id="lvl"><?php echo $user['lvl'];?></span></p>
		</a>
		</div>
	</div>
	</div>
</div>

<div class="rightup">
	<div class="after">
		<p>Historico</p>
		<div class="quemas"></div>
	</div>
</div>

<?php
$expatual = $user['exp'] * 10;
$exp = $user['exp'];
?>

<div class="bottomh">
	<div class="align">
		<div class="profile">
			<div class="exp" uk-tooltip="Progresso">
				<div uk-tooltip="EXP atual <?Php echo $exp;?> de 10" class="atual"></div>
			</div>
			<div class="avatar">
			</div>
			<p><?php echo $user['usuario'];?></p>
		</div>
	</div>
</div>


<style type="text/css">
	.bottomh .profile .avatar{
		background-image: url("/img/user/<?php echo $user['avatar'];?>")
	}

	.exp{
		width: 100%;
		height: 10px;
		background: #57772c;
		position: absolute;
		top: -10px;
	}

	.exp .atual{
		width: <?php echo $expatual;?>%;
		background: #f4f5f4;
		height: 100%;
		box-shadow: 1px 1px 1px rgba(0,0,0,0.50);
	}
</style>

<?Php } ?>
<?Php }  else{ include '../404/index.php';}?>