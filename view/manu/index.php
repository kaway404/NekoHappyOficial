<div class="main">
<div class="header bluebar">
	<img id="logo" class="logo" src="/assets/img/logo.png"/>
</div>

<div class="hora" id="lang" style="left: 0%;">
	<h1>Estamos em manunteção</h1>
	<p>Tente novamente mais tarde. :)</p>
	<a href="/"><div class="btn login" id="cadastro">Página inicial</div></a>
</div>

<div class="back"><div class="after"></div></div>

</div>

<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "nekohappy";
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
if(!$conn){
        echo '';
}
else{
    	$result_back = "SELECT * FROM background WHERE id and ativo = 1 ORDER BY RAND() LIMIT 1";
	    $result_backed = mysqli_query($conn, $result_back);
	    $background = mysqli_fetch_assoc($result_backed);
    	foreach ($result_backed as $result_backed => $result_backeds) {
  ?>
  <style type="text/css">
  	.main .back{
	background-image: url(/assets/img/background/<?php echo $result_backeds['url'];?>) !important;
}
  </style>
  <?php }} ?>
