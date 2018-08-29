<?php if(isset($template)){
// Tuturial
if($user['tuturial'] == 0){
	require './view/dashboard/tuturial/index.php';
}
echo '<div class="align">';
echo '<div class="flex">';
echo '<div class="feed">';

echo '<div class="oksrs" style="top: 0px;">';
require './view/page/criando.php';
echo '</div>';

// Status
require './view/dashboard/status/me.php';
echo '</div>';
echo '</div>';

echo '<div class="newcomunidadet">
<div class="back"><div class="after"></div></div>
</div>';

 } else{ include '../404/index.php';}?>