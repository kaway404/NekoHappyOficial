<div class="okay">
	<div class="config" style="top: 200%; position: absolute;">
		<div class="menu">
			<div class="options">
			<p>Configuração de usuario</p>
			<ul>
				<li class="ativo">Minha conta</li>
				<a href="/logout"><li class="desa">Sair</li></a>
			</ul>
		</div>
		</div>

	<div class="centro">
			<h1>Minha conta</h1>
			<h1 class="close" uk-tooltip="title: Fechar; pos: bottom"><span class="settings" uk-icon="icon: close"></span></h1>
			<div class="account">
				<img class="avatar" src="/assets/img/user/<?php echo $user['avatar'];?>"/>
				<h2>nome de usuário<br> <h2 style="top: 60px; font-size: 15px; color: #e0dede;"><?php echo $user['usuario'];?></h2></h2>
				<h2 class="email">email<br> <h2 style="top: 110px; font-size: 15px; color: #e0dede;"><?php echo $user['email'];?></h2></h2>
				<div class="editar">Editar</div>
			</div>
	</div>

	</div>


</div>

<div class="left-menu">
	<ul>
	<li class="amigos" uk-tooltip="title: Seus amigos; pos: left"></li>
	</ul>
</div>

<div class="header-a">
	<img class="avatar" src="/assets/img/user/<?php echo $user['avatar'];?>"/>
	<p><?php echo $user['usuario'];?> <span uk-tooltip="title: Configuração" class="settings" uk-icon="icon: settings"></span></p>
</div>

<script type="text/javascript">
	$( ".settings" ).click(function() {
		$('.config').css('top', '0%');
	});

	$( ".centro .close" ).click(function() {
		$('.config').css('top', '200%');
	});
</script>