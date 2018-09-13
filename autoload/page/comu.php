<?php
if(isset($_GET['id']) ){
	$comun = $_GET['id'];
	$pontos = array(",", ".", "'");
	$comu = str_replace($pontos, "", $comun);
    $result_comunidadec = "SELECT * FROM comunidade WHERE id = '$comu' LIMIT 1";
    $resultado_comunidaderc = mysqli_query($conn, $result_comunidadec);
    $comunidade = mysqli_fetch_assoc($resultado_comunidaderc);
}