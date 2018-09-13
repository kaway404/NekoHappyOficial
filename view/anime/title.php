<?php if(isset($template)){
require './autoload/anime/anime.php';
echo '<div class="align">';
echo '<div class="flex">';
echo '<div class="feed">';
echo '<div id="perfil">';
if(isset($anime)){
echo '<div class="notice" style="top: -20px;">
    <p>Faça o <a href="/login" style="color: #ddd !important;">login</a> ou <a style="color: #ddd !important; href="/cadastro">registra-se</a> para ver está página completa.</p>
	</div>';	
echo '<h1 style="font-size: 1.6em;">' . 'Anime ' .$anime['slug'] . '</h1>';
echo '<p>Genero: ' . $anime['age_rating_guide']. ' |';
echo ' Rating: ' . $anime['age_rating'] . '</p>' ;
echo '<p>Sinopse: ' . $anime['synopsis'];
echo '<p>Trailer</p>';
echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $anime['youtube_video_id'] . '"' . ' frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
}
else{
	echo '<div class="notice" style="top: 0;">
    <p>Este anime não existe.</p>
</div>';
}


echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

if(isset($_COOKIE['iduser'],$_COOKIE['cry'])){
// Status
require './view/dashboard/status/me.php';
}
else{
	require './view/dashboard/status/account.php';
}
 }else{
 	include '../404/index.php';
 } ?>