<?php if(isset($template)){?>
<div class="headerta">
	<div class="align">
		<a href="/"><img class="logo" src="/assets/img/friends.png"/></a>
	<div class="boxcenter">
		<input class="busca" type="text" placeholder="Buscar amigos"/>
		<div id="box-s-h">
		    <ul class="novo">
			</ul>
		</div>
	</div>
	<script type="text/javascript" src="/assets/js/search.js"></script>
	<div class="boxleft">
		<div class="okaysr">
		<img class="avatar" src="/img/user/default.jpg"/>
		<div class="menu">
			<p>Conta</p>
			<a href="/cadastro">Registrar</a>
			<br>
			<a href="/login">Login</a>

		</div>
		</div>
	</div>
	</div>
</div>

<script type="text/javascript">
	$( ".okaysr" ).click(function() {
if( $('.menu').is(':visible') ) {
  $('.menu').css('display', 'none');
} else {
  $('.menu').css('display', 'block');
}
	});
</script>



<?Php }  else{ include '../404/index.php';}?>