<div class="okay">
	<div class="config" id="config" style="top: 200%; position: absolute;">
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
			<h1 class="close" id="fecharb" uk-tooltip="title: Fechar; pos: bottom"><span class="settings" uk-icon="icon: close"></span></h1>
			<div class="account">
				<img class="avatar" src="/assets/img/user/<?php echo $user['avatar'];?>"/>
				<h2>nome de usuário<br> <h2 style="top: 60px; font-size: 15px; color: #e0dede;"><?php echo $user['usuario'];?></h2></h2>
				<h2 class="email">email<br> <h2 style="top: 110px; font-size: 15px; color: #e0dede;"><?php echo $user['email'];?></h2></h2>
				<div class="editar">Editar</div>
			</div>
	</div>

	</div>

		<div class="config" id="amigos" style="top: 0%; position: absolute;">
		<div class="menu" style="width: 18%">
			<div class="options">
			<div class="amigosg" type="text" placeholder="Encontre amigos">
				<p>Encontre amigos</p>
			</div>
			<hr style="width: 100%;  border-top: 2px solid rgb(72, 72, 72);">
		</div>
		</div>

	<div class="centro">
			<h1 class="close" id="fechara" uk-tooltip="title: Fechar; pos: bottom"><span class="settings" uk-icon="icon: close"></span></h1>
	</div>


<div class="over" id="okaya" style="position: fixed; width: 100%; height: 100%;     background-color: rgb(47, 49, 54); z-index: 10000; top: 0; left: 0; opacity: 0.85; display: none;">
<div class="buscar">
<h1>Procure algum amigo, ou uma conversa.</h1>
<img class="diag" id="anima" src="https://discordapp.com/assets/7c5e2c588b7325c8433db1ac2a03a6b6.svg"/>
<img class="diag" style="right: 100px !important; bottom: 140px;" id="anima" src="https://discordapp.com/assets/7c5e2c588b7325c8433db1ac2a03a6b6.svg"/>
<input type="text" class="buscara_" placeholder=""/>
<p>Pressione esc para sair</p>
</div>
</div>

	</div>


</div>


<script type="text/javascript">
	$( ".settings" ).click(function() {
		$('#config').css('top', '0%');
		$('#config').addClass('bounce');
		$('#amigos').css('top', '200%');
		window.history.pushState("Cadastro", "NekoHappy", "/ajustes");
	});

	$( ".centro #fecharb" ).click(function() {
		$('#config').css('top', '200%');
		window.history.pushState("Cadastro", "NekoHappy", "/");
	});


	$( ".amigos" ).click(function() {
		$('#config').css('top', '200%');
		$('#config').addClass('bounce');
		$('#amigos').css('top', '0%');
		window.history.pushState("Cadastro", "NekoHappy", "/amigos");
	});


	$( ".centro #fechara" ).click(function() {
		$('#config').css('top', '200%');
		$('#amigos').css('top', '200%');
		window.history.pushState("Cadastro", "NekoHappy", "/");
	});

	$( ".amigosg" ).click(function() {
	$('#okaya').css('display', 'block');
	});

jQuery(document).on('keyup',function(evt) {
    if (evt.keyCode == 27) {
      $('#okaya').css('display', 'none');
    }
});
</script>