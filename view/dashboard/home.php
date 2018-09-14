<?php if(isset($template)){
// Tuturial
if($user['tuturial'] == 0){
	require './view/dashboard/tuturial/index.php';
}
echo '<div class="align">';
echo '<div class="flex">';
echo '<div class="feed">';

// Saudacao
require './view/dashboard/saudacao/ola.php';
// Postagem
require './view/dashboard/post/novo.php';
// Amigos sugeridos
require './view/dashboard/sugeridos/amigos.php';
// Comunidades sugeridos
require './view/dashboard/sugeridos/paginas.php';
echo '<div class="oksrs">';
// Feed
require './view/dashboard/feed/post.php';
echo '</div>';

// Status
require './view/dashboard/status/me.php';
echo '</div>';
echo '</div>';
 } else{ include '../404/index.php';}?>