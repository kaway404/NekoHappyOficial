<?php if(isset($template)){?>
<?php if(empty($_COOKIE['iduser']) && (empty($_COOKIE['cry']) )){ ?>
<div class="main">
<div class="header bluebar">
	<a href="/"><img id="logo" class="logo" src="/assets/img/logo.png"/></a>
</div>

<div class="hora" id="loginte" style="left: 0%;">
	<h1>Faça o login</h1>
	<hr>
	<input class="input" id="email-l" type="email" name="email" placeholder="E-mail"/>
	<input class="input" id="senha-l" type="password" name="senha" placeholder="Senha"/>
	<br>
	<a href="/esqueci" style="position: relative;top: 10px; color: #7289da;">Esqueci minha senha</a>
	<br>
	<a href="/cadastro"><div class="btn coin" id="cadastro">Cadastrar</div></a>
	<a href="/"><div class="btn login" id="cancel_lo">Cancelar</div></a>
	<div class="error" id="error2"></div>
</div>

<div class="back" id="thirt"><div class="after"></div></div>

</div>

<script type="text/javascript">
	$( "#logar" ).click(function() {

		var email = $("#email-l");
        var emailPost = email.val();
        var senha = $("#senha-l");
        var senhaPost = senha.val();
        $.post("/logando", {email: emailPost, senha: senhaPost},
        function(data){
         $("#error2").html(data);
         }
         , "html");
         return false;

	});
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