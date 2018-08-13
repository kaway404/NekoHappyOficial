<?php
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){?>
<div class="align">
<div class="flex">
<div class="feed">

<div class="menuoptionsfeed">
	<a>Fazer uma postagem</a>
	<a>Meu perfil</a>
	<a>Amigos</a>
</div>

<div class="notice">
	<p>Seja bem vindo(a) ao NekoHappy</p>
</div>


<div class="uk-position-relative uk-visible-toggle uk-light" uk-slider id="sugeridos">
<span>Amigos sugeridos</span>
    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
    	<?php
    	$iduser = $user['id'];
    	$result_people = "SELECT * FROM user WHERE id <> '$iduser' LIMIT 40";
	    $resultado_people = mysqli_query($conn, $result_people);
	    $people = mysqli_fetch_assoc($resultado_people);
    	foreach ($resultado_people as $resultado_people => $resultado_peoples) {
    	?>
        <a href="/profile/<?php echo $resultado_peoples['id'];?>"><li uk-tooltip="<?php echo $resultado_peoples['usuario'];?>">
            <img src="/assets/img/user/<?php echo $resultado_peoples['avatar'];?>" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li></a>
    <?php } ?>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>

<div class="post">

</div>
<div class="post">

</div>
<div class="post">

</div>
<div class="post">

</div>
<div class="post">

</div>

</div>

<div class="status">
<a href="/profile/<?php echo $user['id'];?>">
<img class="avatar" src="/assets/img/user/<?php echo $user['avatar'];?>"/>
<p class="user"><?php echo $user['usuario'];?></p>
</a>
<hr style="position: absolute; top: 40px">
<a href="/logout" class="logout">Sair</a>

</div>

</div>
</div>
<?php } ?>