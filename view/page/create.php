<?php if(isset($template)){
echo '<div class="comunidadenew">';
echo '<div class="align">';
echo '<div class="flex">';
echo '<div class="feed">';

echo '<div class="oksrs" style="top: 0px;">';
require './view/page/criando.php';
echo '</div>';
echo '</div>';
// Status
require './view/dashboard/status/me.php';
echo '</div>';
echo '</div>';

 } else{ include '../404/index.php';}?>