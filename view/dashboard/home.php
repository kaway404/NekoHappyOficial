<?php if(isset($template)){
echo '<div class="align">';
echo '<div class="flex">';
echo '<div class="feed">';
// Postagem
require './view/dashboard/post/novo.php';
// Amigos sugeridos
require './view/dashboard/sugeridos/amigos.php';
echo '<div class="oksrs">';
// Feed
require './view/dashboard/feed/post.php';
echo '</div>';
// Status
require './view/dashboard/status/me.php';
echo '</div>';
echo '</div>';
 } else{ include './view/404/index.php';}?>
