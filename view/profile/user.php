<?php if(isset($template)){
echo '<div class="align">';
echo '<div class="flex">';
echo '<div class="feed">';
echo '<div id="perfil">';
$stran = $_GET['id'];
$pontos = array(",", ".", "'");
$strangert = str_replace($pontos, "", $stran);

if(isset($_COOKIE['iduser'],$_COOKIE['cry'])){
if($user['id'] == $strangert){
	if($user['banido'] == 0){
	require './view/profile/me.php';
	}
	else{
		echo '<div class="notice" style="top: -20px;">
    <p>Você está banido.</p>
	</div>';
	}
}
else{
	require './view/profile/stranger.php';
}
if($user['id'] == $_GET['id']){
	if($user['tuturial'] == 1)
{
	require './view/dashboard/tuturial/perfil.php';
} 
}

// Status
require './view/dashboard/status/me.php';
}
else{
	echo '<div class="notice" style="top: -20px;">
    <p>Faça o <a href="/login" style="color: #ddd !important;">login</a> ou <a style="color: #ddd !important; href="/cadastro">registra-se</a> para ver está página completa.</p>
	</div>';
	require './view/dashboard/status/account.php';
	require './view/profile/stranger.php';
}


echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

 }else{
 	include '../404/index.php';
 } ?>