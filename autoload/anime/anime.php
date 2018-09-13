<?php
if(isset($_GET['title']) ){
	$title = $_GET['title'];
	$pontos = array(",", ".", "'");
	$animet = str_replace($pontos, "", $title);
    $result_animec = "SELECT * FROM anime WHERE id = '$animet' LIMIT 1";
    $resultado_animerc = mysqli_query($conn, $result_animec);
    $anime = mysqli_fetch_assoc($resultado_animerc);
}