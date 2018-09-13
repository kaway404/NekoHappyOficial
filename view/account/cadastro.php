<?php if(isset($template)){?>
<?php if(empty($_COOKIE['iduser']) && (empty($_COOKIE['cry']) )){ ?>
<div class="main">
<div class="header bluebar">
	<a href="/"><img id="logo" class="logo" src="/assets/img/logo.png"/></a>
</div>

<div class="hora" id="registro" style="left: 0%;">
	<h1>Cadastra-se!! <br>É gratuito e sempre será.</h1>
	<hr>
	<input class="input" id="email-r" type="email" name="email" placeholder="E-mail"/>
	<input class="input" id="user-r" type="text" name="user" placeholder="Usuario"/>
	<input class="input" id="senha-r" type="password" name="senha" placeholder="Senha"/>
	<br>
	<div class="btn coin" id="cadastrar">Cadastrar</div>
	<a href="/"><div class="btn login" id="cancel_re">Cancelar</div></a>
	<div class="error" id="error1"></div>
</div>


<div class="back" id="back4"><div class="after"></div></div>

</div>

<script type="text/javascript">
	$( "#cadastrar" ).click(function() {

	    var email = $("#email-r");
        var emailPost = email.val();
        var senha = $("#senha-r");
        var senhaPost = senha.val();
        var user = $("#user-r");
        var userPost = user.val();
        $.post("/registro", {email: emailPost, senha: senhaPost, user: userPost},
        function(data){
         $("#error1").html(data);
         }
         , "html");
         return false;

	});
</script>
<?php } ?>
<?Php } else{ include '../404/index.php';}?>