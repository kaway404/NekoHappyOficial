<?php if(isset($template)){?>

<div class="main">
<div class="header bluebar">
	<img id="logo" class="logo" src="/assets/img/logo.png"/>
</div>

<div class="hora" id="loginte" style="left: 0%; height: auto;">
	<h1>Insira sua nova senha</h1>
	<hr>
	<img class="avatar" src="/img/user/<?php echo $userd['avatar'];?>"/>
	<input class="input" id="senha" type="password" name="pincode" placeholder="Senha"/>
	<br>
	<div class="btn" id="okay">Confirmar</div>
	<a href="/notme"><div class="btn login" id="cancel_no">Agora não</div></a>
	<div class="error" id="error2"></div>
</div>

<div class="back" id="two"><div class="after"></div></div>

</div>

<script type="text/javascript">
	$( "#okay" ).click(function() {
        var senha = $("#senha");
        var senhaPost = senha.val();
        $.post("/novasenha", {senha: senhaPost},
        function(data){
         $("#error2").html(data);
         }
         , "html");
         return false;
	});
</script>
<?Php } else{ include '../404/index.php';}?>