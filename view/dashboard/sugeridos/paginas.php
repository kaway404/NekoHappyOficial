<!-- <?php if(isset($template)){?>
<?php
$iduser = $user['id'];
$result_comunid = "SELECT * FROM comunidade WHERE id ORDER BY RAND() LIMIT 40";
$result_comunida = mysqli_query($conn, $result_comunid);
$comunidade = mysqli_fetch_assoc($result_comunida);
if($comunidade){
?>
<div class="uk-position-relative uk-visible-toggle uk-light" uk-slider id="sugeridos">
<span>Comunidades sugeridas</span>
    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
    	<?php
    	$iduser = $user['id'];
    	$result_comunid = "SELECT * FROM comunidade WHERE id ORDER BY RAND() LIMIT 40";
	    $result_comunida = mysqli_query($conn, $result_comunid);
	    $comunidade = mysqli_fetch_assoc($result_comunida);
    	foreach ($result_comunida as $result_comunida => $result_comunidas) {
    	?>
        <a class="ok" href="/comunidade/<?php echo $result_comunidas['id'];?>">
        	<li uk-tooltip="<?php echo $result_comunidas['nome'];?>">
            <img src="/img/comunidade/default.png" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li></a>
    </ul>

    <a class="haha uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="haha uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>
<?php } } ?>
<?Php } else{ include '../404/index.php';}?> -->