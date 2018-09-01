<?php if(isset($template)){
// Tuturial
if($user['tuturial'] == 0){
	require './view/dashboard/tuturial/index.php';
}
echo '<div class="align">';
echo '<div class="flex">';
echo '<div class="feed">';

// Top Rank
require './view/rank/peoples.php';

echo '</div>';

// Status
require './view/dashboard/status/me.php';
echo '</div>';
echo '</div>';
 } else{ include '../404/index.php';}?>