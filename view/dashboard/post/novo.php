<?php if(isset($template)){?>
<div class="postaaa">
<div class="avatar">
<img src="/img/user/<?php echo $user['avatar'];?>"/>
</div>
</div>
<div class="postar">
<div class="tipos">
<p style="color: #565656 !important; top: 20px; position: relative; left: 20px; font-size: 1.4em;">Selecione um tipo de postagem</p>
<div class="tipo" id="tipotexto" uk-tooltip="Publique em forma de texto">
    <h1>Aa</h1>
    <p>Texto</p>
</div>
</div>

<div class="texto">
<p><?php echo $user['usuario'];?></p>
<div class="width">
<form>
<input id="title" type="text" name="title" placeholder="Título">
<textarea id="texto" class="pensando" placeholder="O seu texto aqui"></textarea>

<button class="fazer" id="fazer">Publicar</button>
</form>
<button class="fazer" id="sair">Fechar</button>

</div>

</div>

</div>

<script type="text/javascript">
	$( "#tipotexto" ).click(function() {
		$(".tipos").hide();
		$(".texto").show();
	});
	$( "#sair" ).click(function() {
		$(".texto").hide();
		$(".tipos").show();
	});
</script>
<?Php } else{ include '../404/index.php';}?>