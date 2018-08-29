<div class="produtos">
	<h1>Loja</h1>
	<p id="abe">Compre tags e funções para seu perfil.</p>
	<p id="abe">Personalize seu perfil com seu gosto.</p>
<?php
$result_produt = "SELECT * FROM produtos WHERE id";
$result_produto = mysqli_query($conn, $result_produt);
$result_produte = mysqli_fetch_assoc($result_produto);
foreach ($result_produto as $result_produto => $result_produtos) {
?>
	<div uk-tooltip="<?php echo $result_produtos['texto'];?>" class="produto_a" id="qualser<?php echo $result_produtos['id'];?>">
		<p id="valor">Valor: <?php echo $result_produtos['valor'];?></p>
	</div>

<style type="text/css">
	#qualser<?php echo $result_produtos['id'];?>{
		background-image: url("/assets/img/produtos/<?php echo $result_produtos['img'];?>")
	}
</style>

<?php }?>

<h2>Personalizar perfil</h2>
<p style="font-size: 1.3em">Estilos para todos os gostos</p>

<div uk-tooltip="Comprar por 500 coins" class="items"><p>Avatar bordar redonda</div>
	<div uk-tooltip="Comprar por 1000 coins" class="items"><p>Perfil verificado</div>

<p style="font-size: 1.4em">Seus coins: <?php echo $user['money'];?></p>

</div>