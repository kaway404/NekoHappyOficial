<!DOCTYPE html>
<html>
<head>
	<title>404 NOT FOUND</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<script type="text/javascript" src="/assets/js/jquery.js"></script>
	<script type="text/javascript" src="/assets/js/uikit.min.js"></script>
	<script type="text/javascript" src="/assets/js/uikit-icons.js"></script>
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css?v=1.0">
	<link rel="stylesheet" type="text/css" href="/assets/css/uikit.min.css?v=1.0">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/animation.css">
</head>
<body>

<div class="main">
<div class="header bluebar">
	<img id="logo" class="logo" src="/assets/img/logo.png"/>
</div>

<div class="hora" id="lang" style="left: 0%;">
	<h1>Página não encontrada</h1>
	<p>Se você tentou digitar a url a mão, recomendo que clique no botão abaixo.</p>
	<a href="/"><div class="btn login" id="cadastro">Página inicial</div></a>
</div>

<div class="back"><div class="after"></div></div>

</div>

</body>
</html>


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