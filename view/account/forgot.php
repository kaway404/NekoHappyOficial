<?php if(isset($template)){?>

<div class="main">
<div class="header bluebar">
	<img id="logo" class="logo" src="/assets/img/logo.png"/>
</div>

<div class="hora" id="loginte" style="left: 0%; height: auto;">
	<h1>Esqueci minha senha</h1>
	<hr>
	<input class="input" id="email-a" type="email" name="senha" placeholder="E-mail"/>
	<br>
	<div class="btn" id="okay">Continuar</div>
	<a href="/notme"><div class="btn login" id="cancel_no">Não sei</div></a>
	<div class="error" id="error2"></div>
</div>

<div class="back" id="two"><div class="after"></div></div>

</div>

<script type="text/javascript">
	$( "#okay" ).click(function() {
        var email = $("#email-a");
        var emailPost = email.val();
        $.post("/esquecer", {email: emailPost},
        function(data){
         $("#error2").html(data);
         }
         , "html");
         return false;
	});
</script>
<?Php } else{ include '../404/index.php';}?>