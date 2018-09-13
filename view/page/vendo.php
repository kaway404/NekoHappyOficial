<?php if(isset($template)){
//Load comunidade info
require './autoload/page/comu.php';
echo '<div class="comunidadenew">';
echo '<div class="align">';
echo '<div class="flex">';
echo '<div class="feed">';
echo '<div class="oksrs" style="top: 0px;">';
if(isset($comunidade)){
	require './view/page/comunidade.php';
}
else{
	echo '<div class="notice" style="top: -20px;">
    <p>Está comunidade não existe, ou está com alvo público privado.</p>
	</div>';
}
echo '</div>';
echo '</div>';
// Status
require './view/dashboard/status/me.php';
echo '</div>';
echo '</div>';

 } else{ include '../404/index.php';}?>