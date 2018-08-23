<?php if(isset($template)){?>
<div class="tuturial">
	<div class="tuturialhi" id="tuturial1">
		<p>Seja bem vindo <?php echo $user['usuario'];?>, iremos te ensinar a usar a NekoHappy.</p>
		<button id="next1">Continuar</button>
	</div>
	<div class="okaytuturial" id="tuturial2">
		<p>Aqui é onde você faz publicações. Pode tanto publicar texto ou imagens e gif. Seja criativo.</p>
		<button id="next2">Continuar</button>
	</div>
	<div class="okaytuturial" id="tuturial3">
		<p>Aqui é o feed de nóticias. Irá aparecer feed de todos que publicar aqui.</p>
		<button id="next3">Finalizar</button>
	</div>
</div>

<style type="text/css">
	body{
		overflow: hidden !important;
	}

	.tuturial{
		width: 100%;
		height: 100%;
		position: absolute;
		background: rgba(0,0,0,.40);
		top: 0;
		left: 0;
		z-index: 10000000;
	}

	#tuturial1{
		background: #fff;
		width: 250px;
		height: auto;
		-webkit-transform: translateY(-50%);
	   transform: translateY(-50%);
	   margin: 0px auto;
	    left: 0;
	   right: 0;
	   position: absolute;
	   top: 20%;
	   padding: 8px;
	   border-radius: 3px;
	}

	#tuturial1 p{
		color: #565656 !important;
	}

	#tuturial1 button{
		border: none;
		position: relative;
		bottom: 10px;
		border-color: #529ecc;
	    background-color: #529ecc;
	    color: hsla(0,0%,100%,.9);
	    cursor: pointer;
	    padding: 8px;
	}

	#tuturial1 button:focus{
		background-color: #729ecc;
	}

	#tuturial1 button:hover{
		background-color: #729ecc;
	}

	.okaytuturial{
		background: #fff;
		width: 250px;
		height: auto;
		-webkit-transform: translateY(-50%);
	   transform: translateY(-50%);
	   margin: 0px auto;
	   left: 0%;
	   right: 0;
	   position: absolute;
	   top: 50%;
	   padding: 5px;
	   box-shadow: 4px 1px 3px rgba(0,0,0,.50);
	}

	.okaytuturial p{
		color: #565656 !important;
	}

	.okaytuturial button{
		border: none;
		position: relative;
		bottom: 10px;
		border-color: #529ecc;
	    background-color: #529ecc;
	    color: hsla(0,0%,100%,.9);
	    cursor: pointer;
	    padding: 8px;
	}

	.okaytuturial button:focus{
		background-color: #729ecc;
	}

	.okaytuturial button:hover{
		background-color: #729ecc;
	}

	#tuturial2{
		left: -75%;
		display: none;
		top: 180px;
	}

	#tuturial3{
		left: -15%;
		display: none;
		top: 370px;
	}
</style>

<div class="novast"></div>

<script type="text/javascript">
	$( "#next1" ).click(function() {
		$("#tuturial1").hide();
		$("#tuturial2").show();
		$(".postar").css("z-index", "1000000000000");
	});

	$( "#next2" ).click(function() {
		$("#tuturial2").hide();
		$("#tuturial3").show();
		$(".postar").css("z-index", "100");
		$(".oksrs").css("z-index", "100000000");
	});

	$( "#next3" ).click(function() {
		$("#tuturial3").hide();
		$(".oksrs").css("z-index", "100");
		$(".tuturial").css("display", "none");
		finish = 1;
		$.post("/tuturial", {finish: finish},
        function(data){
         $(".novast").after(data);
         }
         , "html");
		return false;
	});
</script>
<?Php } else{ include '../404/index.php';}?>