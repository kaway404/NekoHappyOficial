<?php
$iduser = $user['id'];
$result_people = "SELECT * FROM user WHERE id <> '$iduser' ORDER BY RAND() LIMIT 40";
$resultado_people = mysqli_query($conn, $result_people);
$people = mysqli_fetch_assoc($resultado_people);
if($people){
?>
<div class="uk-position-relative uk-visible-toggle uk-light" uk-slider id="sugeridos">
<span>Amigos sugeridos</span>
    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
    	<?php
    	$iduser = $user['id'];
    	$result_people = "SELECT * FROM user WHERE id <> '$iduser' ORDER BY RAND() LIMIT 40";
	    $resultado_people = mysqli_query($conn, $result_people);
	    $people = mysqli_fetch_assoc($resultado_people);
    	foreach ($resultado_people as $resultado_people => $resultado_peoples) {
    	?>
        <a class="ok" href="/profile/<?php echo $resultado_peoples['id'];?>">
        	<li uk-tooltip="<?php echo $resultado_peoples['usuario'];?>">
            <img src="/img/user/<?php echo $resultado_peoples['avatar'];?>" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li></a>
    <?php }?>
    </ul>

    <a class="haha uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="haha uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>
<?php } ?>