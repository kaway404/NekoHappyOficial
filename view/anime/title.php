<?php if(isset($template)){
require './autoload/anime/anime.php';
echo '<div class="align">';
echo '<div class="flex">';
echo '<div class="feed">';
echo '<div id="perfil">';

echo '<h1 style="font-size: 1.6em;">' . 'Anime ' .$anime['slug'] . '</h1>';
echo '<p>Genero: ' . $anime['age_rating_guide']. ' |';
echo ' Rating: ' . $anime['age_rating'] . ' | ' ;
echo 'Episodios: ' . $anime['episode_count'] . '</p>';
echo '<p>Sinopse: ' . $anime['synopsis'];
echo '<p>Trailer</p>';
echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $anime['youtube_video_id'] . '"' . ' frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';


echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

// Status
require './view/dashboard/status/me.php';
 }else{
 	include '../404/index.php';
 } ?>