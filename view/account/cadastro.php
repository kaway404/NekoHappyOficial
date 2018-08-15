<?php if(isset($template)){?>
<?php if(empty($_COOKIE['iduser']) && (empty($_COOKIE['cry']) )){ ?>
<div class="main">
<div class="header bluebar">
	<img id="logo" class="logo" src="/assets/img/logo.png"/>
</div>

<div class="hora" id="lang" style="left: -200%;">
	<h1>É hora de largar o Facebook e o Twitter.</h1>
	<p>Uma rede social para gamers/otakus, nós somos o número 1, venha conferir.</p>
	<div class="btn" id="cadastro">Cadastrar</div>
	<div class="btn login" id="login">Login</div>
</div>

<div class="hora" id="registro" style="left: 0%;">
	<h1>Cadastra-se!! <br>É gratuito e sempre será.</h1>
	<hr>
	<input class="input" id="email-r" type="email" name="email" placeholder="E-mail"/>
	<input class="input" id="user-r" type="text" name="user" placeholder="Usuario"/>
	<input class="input" id="senha-r" type="password" name="senha" placeholder="Senha"/>
	<br>
	<div class="btn" id="cadastrar">Cadastrar</div>
	<div class="btn login" id="cancel_re">Cancelar</div>
	<div class="error" id="error1"></div>
</div>

<div class="hora" id="loginte" style="left: 200%;">
	<h1>Faça o login</h1>
	<hr>
	<input class="input" id="email-l" type="email" name="email" placeholder="E-mail"/>
	<input class="input" id="senha-l" type="password" name="senha" placeholder="Senha"/>
	<br>
	<br>
	<a href="/esqueci" style="position: relative;top: 10px; color: #7289da;">Esqueci minha senha</a>
	<div class="btn" id="logar">Login</div>
	<div class="btn login" id="cancel_lo">Cancelar</div>
	<div class="error" id="error2"></div>
</div>

<div class="back" id="back4"><div class="after"></div></div>

</div>

<script type="text/javascript">
	$( "#cadastro" ).click(function() {
		$('#lang').css('left', '-200%');
		$('#registro').css('left', '0%');
		window.history.pushState("Cadastro", "NekoHappy", "/cadastro");
	});
	$( "#cancel_re" ).click(function() {
		$('#lang').css('left', '0%');
		$('#registro').css('left', '200%');
		window.history.pushState("Cadastro", "NekoHappy", "/");
	});
	$( "#login" ).click(function() {
		$('#lang').css('left', '-200%');
		$('#loginte').css('left', '0%');
		window.history.pushState("Cadastro", "NekoHappy", "/login");
	});
	$( "#cancel_lo" ).click(function() {
		$('#lang').css('left', '0%');
		$('#loginte').css('left', '200%');
		window.history.pushState("Cadastro", "NekoHappy", "/");
	});

		$( "#logo" ).click(function() {
		$('#lang').css('left', '0%');
		$('#registro').css('left', '200%');
		$('#loginte').css('left', '200%');
		window.history.pushState("Cadastro", "NekoHappy", "/");
	});
</script>

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