<?php if(isset($template)){
echo '<div class="align">';
echo '<div class="flex">';
echo '<div class="feed">';
echo '<div id="perfil">';
$stran = $_GET['id'];
$pontos = array(",", ".", "'");
$strangert = str_replace($pontos, "", $stran);
if($user['id'] == $strangert){
	require './view/profile/me.php';
}
else{
	require './view/profile/stranger.php';
}

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

if($user['id'] == $_GET['id']){
	if($user['tuturial'] == 1)
{
	require './view/dashboard/tuturial/perfil.php';
} 
}

// Status
require './view/dashboard/status/me.php';
 }else{
 	include '../404/index.php';
 } ?>