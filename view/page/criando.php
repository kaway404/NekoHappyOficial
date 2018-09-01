<?php if(isset($template)){?>
<div class="newcomunidade">
<h1 style="color: #476323 !important; font-size: 1.4em;">Criando uma comunidade!!</h1>
<p style="color: #476323 !important; font-size: 1.1em;">Crie uma comunidade do seu jogo/filme/série/banda/anime favorito.</p>

<hr>

<form>
<p style="color: #476323 !important;">Qual vai ser o nome da página?</p>
<input type="" id="nome" name="" placeholder="Exemplo: Sociedade Harry Potter">
<hr>
<p style="color: #476323 !important;">Sobre oque é essa comunidade?</p>
<input type="" id="sobre" name="" placeholder="Exemplo: Fans de Harry Potter">
<hr>
<button id="criando">Criar comunidade</button>
</form>

<div id="error2" style="width: 100%; top: 10px; position: relative;"></div>

</div>

<script type="text/javascript">
	$( "#criando" ).click(function() {
        var nome = $("#nome");
        var nomePost = nome.val();
        var sobre = $("#sobre");
        var sobrePost = sobre.val();
        $.post("/createcommunity", {nome: nomePost, sobre: sobrePost},
        function(data){
         $("#error2").html(data);
         }
         , "html");
         return false;
	});
</script>


 <?php } else{ include '../404/index.php';}?>