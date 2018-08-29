<?php if(isset($template)){
// Tuturial
echo '<div class="align">';
echo '<div class="flex">';
echo '<div class="feed">';
// Produtos
require './view/shop/produto.php';
echo '<div class="oksrs">';
echo '</div>';

// Status
require './view/dashboard/status/me.php';
echo '</div>';
echo '</div>';
 } else{ include '../404/index.php';}?>