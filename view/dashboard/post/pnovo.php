<?php if(isset($template)){?>
<div class="postaaa">
</div>
<div class="postar" style="width: 100%; left: 0; z-index: 1000; background: #2e3d52;">
<div class="tipos">
<p style="color: hsla(0,0%,100%,.6) !important; top: 20px; position: relative; left: 20px; font-size: 1.4vw;">Selecione um tipo de postagem</p>
<div class="tipo" id="tipotexto">
    <h1 style="color: hsla(0,0%,100%,.6) !important;">Aa</h1>
    <p style="color: hsla(0,0%,100%,.6) !important;">Texto</p>
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