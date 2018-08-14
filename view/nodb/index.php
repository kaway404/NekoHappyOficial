<?php if(isset($template)){?>
<div class="main">
<div class="header bluebar">
	<img id="logo" class="logo" src="/assets/img/logo.png"/>
</div>

<div class="hora" id="lang" style="left: 0%;">
	<h1>Ocorreu um erro ao conectar ao banco de dados.</h1>
	<p>Usuario ou senha incorretos, ou banco de dados não existe.</p>
	<a href="/"><div class="btn login" id="cadastro">Tentar novamente</div></a>
</div>

<div class="back"><div class="after"></div></div>

</div>

<script type="text/javascript">
		$( "#logo" ).click(function() {
		$('#lang').css('left', '0%');
		$('#registro').css('left', '200%');
		$('#loginte').css('left', '200%');
		window.history.pushState("Cadastro", "NekoHappy", "/");
	});
</script>
<?Php } else{ include '../404/index.php';}?>
