<div class="main">
<div class="header bluebar">
	<img id="logo" class="logo" src="/assets/img/logo.png"/>
</div>

<div class="hora" id="loginte" style="left: 0%;">
	<h1>Faça o login novamente</h1>
	<hr>
	<img class="avatar" src="/assets/img/user/<?php echo $userc['avatar'];?>"/>
	<input class="input" id="senha-a" type="password" name="senha" placeholder="Senha"/>
	<br>
	<div class="btn" id="verificar">Login</div>
	<a href="/notme"><div class="btn login" id="cancel_no">Não sou eu</div></a>
	<div class="error" id="error2"></div>
</div>

<div class="back"><div class="after"></div></div>

</div>

<script type="text/javascript">
	$( "#verificar" ).click(function() {
        var senha = $("#senha-a");
        var senhaPost = senha.val();
        $.post("/verificando", {senha: senhaPost},
        function(data){
         $("#error2").html(data);
         }
         , "html");
         return false;
	});
</script>